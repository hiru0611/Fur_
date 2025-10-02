<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        if (!$user) {
            // For guest users, you might want to use session-based cart
            // For now, redirect to login
            return redirect()->route('login')->with('error', 'Please login to view your cart.');
        }

        $cartModel = Cart::where('user_id', $user->id)->with('items')->first();
        
        if (!$cartModel) {
            $cart = [
                'items' => [],
                'count' => 0,
                'total' => 0
            ];
        } else {
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
        }

        // Update session with cart count
        session(['cart.count' => $cart['count']]);

        return view('cart.index', compact('cart'));
    }

    public function add(Request $request, $id)
    {
        $user = Auth::user();
        
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login to add items to cart.');
        }

        $product = Product::findOrFail($id);
        $qty = $request->input('qty', $request->input('quantity', 1));

        // Validate quantity
        if ($qty < 1) {
            return back()->with('error', 'Quantity must be at least 1.');
        }

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
                'product_id' => $product->_id, // Use MongoDB _id
                'qty' => $qty,
            ]);
        }

        // Update session with cart count
        $totalItems = CartItem::where('cart_id', $cart->id)->sum('qty');
        session(['cart.count' => $totalItems]);

        return back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login to update cart.');
        }

        $cartItem = CartItem::where('id', $id)
            ->whereHas('cart', function($query) use ($user) {
                $query->where('user_id', $user->id);
            })
            ->firstOrFail();

        $qty = $request->input('qty', 1);

        // Validate quantity
        if ($qty < 1) {
            return back()->with('error', 'Quantity must be at least 1.');
        }

        $cartItem->qty = $qty;
        $cartItem->save();

        // Update session with cart count
        $totalItems = CartItem::where('cart_id', $cartItem->cart_id)->sum('qty');
        session(['cart.count' => $totalItems]);

        return back()->with('success', 'Cart updated successfully!');
    }

    public function remove($id)
    {
        $user = Auth::user();
        
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login to remove items from cart.');
        }

        $cartItem = CartItem::where('id', $id)
            ->whereHas('cart', function($query) use ($user) {
                $query->where('user_id', $user->id);
            })
            ->firstOrFail();

        $cartId = $cartItem->cart_id;
        $cartItem->delete();

        // Update session with cart count
        $totalItems = CartItem::where('cart_id', $cartId)->sum('qty');
        session(['cart.count' => $totalItems]);

        return back()->with('success', 'Item removed from cart successfully!');
    }
}