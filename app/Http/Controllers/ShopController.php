<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $currentCategorySlug = null;

        return view('shop.index', compact('categories', 'currentCategorySlug'));
    }

    public function category($slug)
    {
        $categories = Category::all();

        $category = Category::where('slug', $slug)->firstOrFail();
        $currentCategorySlug = $category->slug;

        return view('shop.index', compact('categories', 'currentCategorySlug'));
    }

    public function show($id)
    {
        $product = Product::with('images')->findOrFail($id);

        $relatedProducts = Product::with('images')
            ->where('category_id', $product->category_id ?? null)
            ->where('_id', '!=', $product->_id)
            ->take(4)
            ->get();

        return view('shop.show', compact('product', 'relatedProducts'));
    }
}
