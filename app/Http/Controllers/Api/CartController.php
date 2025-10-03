<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display the user's cart
     */
    public function index(): JsonResponse
    {
        try {
            $user = Auth::user();
            $cartModel = Cart::where('user_id', $user->id)->with('items.product.images')->first();
            
            if (!$cartModel) {
                return response()->json([
                    'success' => true,
                    'data' => [
                        'items' => [],
                        'count' => 0,
                        'total' => 0
                    ],
                    'message' => 'Cart is empty'
                ]);
            }

            $items = [];
            $total = 0;
            $count = 0;

            foreach ($cartModel->items as $item) {
                if ($item->product) {
                    $itemTotal = $item->product->price * $item->qty;
                    $total += $itemTotal;
                    $count += $item->qty;

                    $items[] = [
                        'id' => $item->id,
                        'product_id' => $item->product_id,
                        'name' => $item->product->name,
                        'price' => $item->product->price,
                        'qty' => $item->qty,
                        'subtotal' => $itemTotal,
                        'image' => $item->product->images->first() ? $item->product->images->first()->image_path : null,
                    ];
                }
            }

            return response()->json([
                'success' => true,
                'data' => [
                    'items' => $items,
                    'count' => $count,
                    'total' => $total
                ],
                'message' => 'Cart retrieved successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve cart',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Add item to cart
     */
    public function add(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|string',
            'qty' => 'required|integer|min:1',
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
            $product = Product::findOrFail($request->product_id);
            $qty = $request->qty;

            // Get or create user's cart
            $cart = Cart::firstOrCreate(['user_id' => $user->id]);

            // Check if item already exists in cart
            $existingItem = CartItem::where('cart_id', $cart->id)
                ->where('product_id', $product->_id)
                ->first();

            if ($existingItem) {
                // Update existing item quantity
                $existingItem->qty += $qty;
                $existingItem->save();
            } else {
                // Create new cart item
                CartItem::create([
                    'cart_id' => $cart->id,
                    'product_id' => $product->_id,
                    'qty' => $qty,
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Product added to cart successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to add product to cart',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update cart item quantity
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'qty' => 'required|integer|min:1',
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
            $cartItem = CartItem::where('id', $id)
                ->whereHas('cart', function($query) use ($user) {
                    $query->where('user_id', $user->id);
                })
                ->firstOrFail();

            $cartItem->qty = $request->qty;
            $cartItem->save();

            return response()->json([
                'success' => true,
                'message' => 'Cart item updated successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update cart item',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove item from cart
     */
    public function remove(string $id): JsonResponse
    {
        try {
            $user = Auth::user();
            $cartItem = CartItem::where('id', $id)
                ->whereHas('cart', function($query) use ($user) {
                    $query->where('user_id', $user->id);
                })
                ->firstOrFail();

            $cartItem->delete();

            return response()->json([
                'success' => true,
                'message' => 'Item removed from cart successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to remove item from cart',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Clear entire cart
     */
    public function clear(): JsonResponse
    {
        try {
            $user = Auth::user();
            $cart = Cart::where('user_id', $user->id)->first();
            
            if ($cart) {
                $cart->items()->delete();
            }

            return response()->json([
                'success' => true,
                'message' => 'Cart cleared successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to clear cart',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
