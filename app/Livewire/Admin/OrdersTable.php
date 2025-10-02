<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use App\Models\User;

class OrdersTable extends Component
{
    public string $filterStatus = '';

    public function setStatus(string $orderId, string $status): void
    {
        $order = Order::findOrFail($orderId);
        $order->status = $status;
        $order->save();
    }

    public function render()
    {
        $query = Order::orderByDesc('created_at');
        if ($this->filterStatus !== '') {
            $query->where('status', $this->filterStatus);
        }
        $orders = $query->limit(50)->get();

        // Fetch related SQL users in a single query to avoid cross-connection relationships
        $userMap = collect();
        $userIds = $orders->pluck('user_id')->filter()->unique()->values();
        if ($userIds->isNotEmpty()) {
            $userMap = User::whereIn('id', $userIds)->get(['id','name','email'])->keyBy('id');
        }

        return view('livewire.admin.orders-table', [
            'orders' => $orders,
            'userMap' => $userMap,
        ]);
    }
}


