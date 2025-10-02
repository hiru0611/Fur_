<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->latest()->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get(['_id','name','slug']);
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string',
            'price'    => 'required|numeric',
            'rating'   => 'required|integer|min:1|max:5',
            'description' => 'nullable|string',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
            'category_slug' => 'required|string',
        ]);

        $category = Category::where('slug', $request->category_slug)->first();

        // Cast rating to integer
        $product = Product::create([
            'name'   => $request->name,
            'price'  => $request->price,
            'rating' => (int) $request->rating,
            'description' => $request->description,
            'category_id' => $category ? ($category->_id ?? $category->id) : null,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                $product->images()->create([
                    'product_id' => $product->_id,
                    'image_path' => $path,
                ]);
            }
        }

        return redirect()->route('admin.products.index')
            ->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::with('images')->findOrFail($id);
        $categories = Category::orderBy('name')->get(['_id','name','slug']);
        return view('admin.products.edit', compact('product','categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name'     => 'required|string',
            'price'    => 'required|numeric',
            'rating'   => 'required|integer|min:1|max:5',
            'description' => 'nullable|string',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
            'category_slug' => 'required|string',
        ]);

        $category = Category::where('slug', $request->category_slug)->first();

        // Update with integer rating
        $product->update([
            'name'   => $request->name,
            'price'  => $request->price,
            'rating' => (int) $request->rating,
            'description' => $request->description,
            'category_id' => $category ? ($category->_id ?? $category->id) : null,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                $product->images()->create([
                    'product_id' => $product->_id,
                    'image_path' => $path,
                ]);
            }
        }

        return redirect()->route('admin.products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->images()->delete();
        $product->delete();

        return redirect()->route('admin.products.index')
            ->with('success', 'Product deleted successfully.');
    }
}
