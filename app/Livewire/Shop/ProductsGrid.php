<?php

namespace App\Livewire\Shop;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class ProductsGrid extends Component
{
    public ?string $categorySlug = null; // backward-compat param
    public ?string $selectedCategorySlug = null;
    public ?float $minPrice = null;
    public ?float $maxPrice = null;
    public ?string $search = null;

    public function mount(?string $categorySlug = null, ?float $maxPrice = null, ?float $minPrice = null, ?string $search = null): void
    {
        $this->categorySlug = $categorySlug;
        $this->selectedCategorySlug = $categorySlug;
        $this->maxPrice = $maxPrice;
        $this->minPrice = $minPrice;
        $this->search = $search;
    }

    public function render()
    {
        $query = Product::with('images')->latest();

        if (!is_null($this->minPrice)) {
            $query->where('price', '>=', $this->minPrice);
        }

        if (!is_null($this->maxPrice)) {
            $query->where('price', '<=', $this->maxPrice);
        }

        if (!empty($this->selectedCategorySlug)) {
            $category = Category::where('slug', $this->selectedCategorySlug)->first();
            if ($category) {
                $query->where('category_id', $category->_id ?? $category->id);
            }
        }

        if (!empty($this->search)) {
            $like = '%' . $this->search . '%';
            $query->where(function ($q) use ($like) {
                $q->where('name', 'like', $like)
                  ->orWhere('description', 'like', $like);
            });
        }

        $products = $query->take(36)->get();

        // Convert images to base64 for each product
        $products->each(function ($product) {
            $product->images->each(function ($image) {
                if (!$image->base64_image && $image->image_path) {
                    $image->base64_image = \App\Services\ImageService::convertToBase64($image->image_path);
                }
            });
        });

        $categories = Category::orderBy('name')->get(['name','slug']);

        return view('livewire.shop.products-grid', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}


