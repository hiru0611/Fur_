<div wire:poll.5s>
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-lg font-semibold text-[#5C4033]">Recent Orders</h2>
        <select wire:model="filterStatus" class="border rounded px-2 py-1">
            <option value="">All</option>
            <option value="pending">Pending</option>
            <option value="processing">Processing</option>
            <option value="accepted">Accepted</option>
            <option value="ready_to_ship">Ready to Ship</option>
            <option value="shipped">Shipped</option>
            <option value="delivered">Delivered</option>
        </select>
    </div>

    <div class="bg-white shadow rounded-xl overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-600">
                <tr>
                    <th class="text-left p-3">Date</th>
                    <th class="text-left p-3">Order ID</th>
                    <th class="text-left p-3">Customer</th>
                    <th class="text-left p-3">Customer ID</th>
                    <th class="text-left p-3">Payment</th>
                    <th class="text-left p-3">Status</th>
                    <th class="text-right p-3">Total</th>
                    <th class="text-right p-3">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach($orders as $order)
                    <tr>
                        <td class="p-3">{{ $order->created_at }}</td>
                        <td class="p-3">#{{ $order->_id }}</td>
                        <td class="p-3">{{ ($userMap[$order->user_id]->name ?? $order->user_name) ?? 'Guest' }}</td>
                        <td class="p-3">{{ $order->user_id ?? '-' }}</td>
                        <td class="p-3 uppercase">{{ $order->payment_method }}</td>
                        <td class="p-3">
                            @php
                                $status = $order->status;
                                $statusText = ucfirst(str_replace('_',' ', $status));
                                $color = match($status) {
                                    'pending' => 'text-gray-600',
                                    'accepted' => 'text-blue-600',
                                    'ready_to_ship' => 'text-amber-600',
                                    'shipped' => 'text-purple-600',
                                    'delivered' => 'text-green-600',
                                    default => 'text-gray-600',
                                };
                            @endphp
                            <span class="font-medium {{ $color }}">{{ $statusText }}</span>
                        </td>
                        <td class="p-3 text-right">$ {{ number_format($order->total, 2) }}</td>
                        <td class="p-3 text-right space-x-1">
                            @if($order->status === 'pending')
                                <button wire:click="setStatus('{{ $order->_id }}','accepted')" class="px-2 py-1 text-xs rounded bg-blue-50 text-blue-700">Accept</button>
                            @elseif($order->status === 'accepted')
                                <button wire:click="setStatus('{{ $order->_id }}','ready_to_ship')" class="px-2 py-1 text-xs rounded bg-amber-50 text-amber-700">Ready to Ship</button>
                            @elseif($order->status === 'ready_to_ship')
                                <button wire:click="setStatus('{{ $order->_id }}','shipped')" class="px-2 py-1 text-xs rounded bg-purple-50 text-purple-700">Mark Shipped</button>
                            @elseif($order->status === 'shipped')
                                <button wire:click="setStatus('{{ $order->_id }}','delivered')" class="px-2 py-1 text-xs rounded bg-green-50 text-green-700">Mark Delivered</button>
                            @else
                                <span class="text-green-700 text-xs">Completed</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


