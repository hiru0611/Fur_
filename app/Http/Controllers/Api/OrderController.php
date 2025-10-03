<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of user's orders
     */
    public function index(): JsonResponse
    {
        try {
            $user = Auth::user();
            $orders = Order::where('user_id', $user->id)
                ->with('items.product.images')
                ->orderBy('created_at', 'desc')
                ->paginate(15);

            return response()->json([
                'success' => true,
                'data' => $orders,
                'message' => 'Orders retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve orders',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified order
     */
    public function show(string $id): JsonResponse
    {
        try {
            $user = Auth::user();
            $order = Order::where('user_id', $user->id)
                ->with('items.product.images')
                ->findOrFail($id);

            return response()->json([
                'success' => true,
                'data' => $order,
                'message' => 'Order retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Order not found'
            ], 404);
        }
    }

    /**
     * Store a newly created order
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'payment_method' => 'required|string|in:credit_card,debit_card,paypal,cash_on_delivery',
            'shipping_address' => 'required|array',
            'shipping_address.name' => 'required|string',
            'shipping_address.street' => 'required|string',
            'shipping_address.city' => 'required|string',
            'shipping_address.state' => 'required|string',
            'shipping_address.zip' => 'required|string',
            'shipping_address.country' => 'required|string',
            'billing_address' => 'nullable|array',
            'billing_address.name' => 'required_with:billing_address|string',
            'billing_address.street' => 'required_with:billing_address|string',
            'billing_address.city' => 'required_with:billing_address|string',
            'billing_address.state' => 'required_with:billing_address|string',
            'billing_address.zip' => 'required_with:billing_address|string',
            'billing_address.country' => 'required_with:billing_address|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $user = Auth::user();
            
            // Get user's cart
            $cart = Cart::where('user_id', $user->id)->with('items.product')->first();
            
            if (!$cart || $cart->items->isEmpty()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Cart is empty'
                ], 422);
            }

            DB::beginTransaction();

            // Calculate totals
            $subtotal = 0;
            $items = [];

            foreach ($cart->items as $cartItem) {
                if ($cartItem->product) {
                    $itemTotal = $cartItem->product->price * $cartItem->qty;
                    $subtotal += $itemTotal;
                    
                    $items[] = [
                        'product_id' => $cartItem->product_id,
                        'product_name' => $cartItem->product->name,
                        'price' => $cartItem->product->price,
                        'qty' => $cartItem->qty,
                        'subtotal' => $itemTotal,
                    ];
                }
            }

            $shipping = 10; // Fixed shipping cost
            $discount = 0; // No discount for now
            $total = $subtotal + $shipping - $discount;

            // Create order
            $order = Order::create([
                'user_id' => $user->id,
                'user_name' => $user->name,
                'payment_method' => $request->payment_method,
                'status' => 'pending',
                'subtotal' => $subtotal,
                'shipping' => $shipping,
                'discount' => $discount,
                'total' => $total,
                'shipping_address' => $request->shipping_address,
                'billing_address' => $request->billing_address ?: $request->shipping_address,
            ]);

            // Create order items
            foreach ($items as $item) {
                OrderItem::create([
                    'order_id' => $order->_id,
                    'product_id' => $item['product_id'],
                    'product_name' => $item['product_name'],
                    'price' => $item['price'],
                    'qty' => $item['qty'],
                    'subtotal' => $item['subtotal'],
                ]);
            }

            // Clear cart
            $cart->items()->delete();

            DB::commit();

            $order->load('items');

            return response()->json([
                'success' => true,
                'data' => $order,
                'message' => 'Order created successfully'
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Failed to create order',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update order status (Admin only)
     */
    public function updateStatus(Request $request, string $id): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required|string|in:pending,processing,shipped,delivered,cancelled',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $order = Order::findOrFail($id);
            $order->status = $request->status;
            $order->save();

            return response()->json([
                'success' => true,
                'data' => $order,
                'message' => 'Order status updated successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update order status',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get all orders (Admin only)
     */
    public function adminIndex(Request $request): JsonResponse
    {
        try {
            $query = Order::with(['items.product.images', 'user']);

            // Filter by status
            if ($request->has('status')) {
                $query->where('status', $request->status);
            }

            // Filter by date range
            if ($request->has('from_date')) {
                $query->whereDate('created_at', '>=', $request->from_date);
            }
            if ($request->has('to_date')) {
                $query->whereDate('created_at', '<=', $request->to_date);
            }

            $orders = $query->orderBy('created_at', 'desc')->paginate(15);

            return response()->json([
                'success' => true,
                'data' => $orders,
                'message' => 'Orders retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve orders',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update order (Admin only)
     */
    public function adminUpdate(Request $request, string $id): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'status' => 'sometimes|required|string|in:pending,processing,shipped,delivered,cancelled',
            'shipping_address' => 'sometimes|required|array',
            'billing_address' => 'sometimes|required|array',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $order = Order::findOrFail($id);
            $order->update($request->only(['status', 'shipping_address', 'billing_address']));

            return response()->json([
                'success' => true,
                'data' => $order,
                'message' => 'Order updated successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update order',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
