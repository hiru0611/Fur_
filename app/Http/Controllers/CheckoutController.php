<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function create(Request $request)
    {
        $user = Auth::user();
        
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login to checkout.');
        }

        $cartModel = Cart::where('user_id', $user->id)->with('items')->first();
        
        if (!$cartModel || $cartModel->items->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        // Build cart data for checkout
        $items = [];
        $total = 0;
        $count = 0;

        foreach ($cartModel->items as $item) {
            $product = Product::find($item->product_id);
            if ($product) {
                $itemTotal = $product->price * $item->qty;
                $total += $itemTotal;
                $count += $item->qty;

                $items[] = [
                    'id' => $item->id,
                    'product_id' => $product->_id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'qty' => $item->qty,
                    'image' => $product->images->first() ? $product->images->first()->image_path : null,
                ];
            }
        }

        $cart = [
            'items' => $items,
            'count' => $count,
            'total' => $total
        ];

        return view('checkout.index', [
            'cart' => $cart,
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login to checkout.');
        }

        $validated = $request->validate([
            'address.line1' => ['required', 'string', 'max:255'],
            'address.city' => ['required', 'string', 'max:120'],
            'address.state' => ['nullable', 'string', 'max:120'],
            'address.postal_code' => ['required', 'string', 'max:20'],
            'address.country' => ['required', 'string', 'max:120'],
            'payment_method' => ['required', 'in:cod,dummy'],
        ]);

        $cartModel = Cart::where('user_id', $user->id)->with('items')->first();
        
        if (!$cartModel || $cartModel->items->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        // Calculate totals
        $total = 0;
        $items = [];
        
        foreach ($cartModel->items as $item) {
            $product = Product::find($item->product_id);
            if ($product) {
                $itemTotal = $product->price * $item->qty;
                $total += $itemTotal;
                
                $items[] = [
                    'product_id' => $product->_id,
                    'qty' => $item->qty,
                    'unit_price' => $product->price,
                    'line_total' => $itemTotal,
                ];
            }
        }

        $paymentMethod = $validated['payment_method'];
        $paymentStatus = 'paid';
        if ($paymentMethod === 'dummy') {
            // Simulate success always; change to random if desired
            $paymentStatus = 'paid';
        } else if ($paymentMethod === 'cod') {
            $paymentStatus = 'pending';
        }

        $order = Order::create([
            'user_id' => $user->id,
            'user_name' => $user->name,
            'payment_method' => $paymentMethod,
            'status' => $paymentStatus === 'paid' ? 'processing' : 'pending',
            'subtotal' => $total,
            'shipping' => 0,
            'discount' => 0,
            'total' => $total,
            'shipping_address' => $validated['address'],
            'billing_address' => $validated['address'],
        ]);

        foreach ($items as $item) {
            OrderItem::create([
                'order_id' => $order->_id,
                'product_id' => $item['product_id'],
                'qty' => $item['qty'],
                'unit_price' => $item['unit_price'],
                'line_total' => $item['line_total'],
            ]);
        }

        // Clear cart from database
        CartItem::where('cart_id', $cartModel->id)->delete();
        
        // Update session cart count
        session(['cart.count' => 0]);

        return redirect()->route('orders.show', $order->_id)
            ->with('success', 'Order placed successfully!');
    }
}


