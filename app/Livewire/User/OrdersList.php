<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Order;

class OrdersList extends Component
{
    public function render()
    {
        $orders = Order::where('user_id', auth()->id())
            ->orderByDesc('created_at')
            ->limit(25)
            ->get();

        return view('livewire.user.orders-list', [
            'orders' => $orders,
        ]);
    }
}


