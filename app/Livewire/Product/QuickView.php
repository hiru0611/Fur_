<?php

namespace App\Livewire\Product;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Product as ProductModel;

class QuickView extends Component
{
    public bool $open = false;
    public ?string $productId = null;
    public $product = null;
    public int $quantity = 1;

    #[On('open-quick-view')]
    public function open($payload): void
    {
        $this->productId = is_array($payload) ? data_get($payload, 'id') : $payload;
        $productId = $this->productId;
        $this->product = ProductModel::with('images')->find($productId);
        $this->quantity = 1;
        $this->open = $this->product !== null;
    }

    public function close(): void
    {
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.product.quick-view');
    }
}


