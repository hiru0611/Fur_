<div wire:poll.5s>
    <h2 class="text-xl font-bold text-[#5C4033] mb-4">My Orders</h2>
    <div class="bg-white shadow rounded-xl overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-600">
                <tr>
                    <th class="text-left p-3">Date</th>
                    <th class="text-left p-3">Order ID</th>
                    <th class="text-left p-3">Payment</th>
                    <th class="text-left p-3">Status</th>
                    <th class="text-right p-3">Total</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @forelse($orders as $order)
                    <tr>
                        <td class="p-3">{{ $order->created_at }}</td>
                        <td class="p-3">#{{ $order->_id }}</td>
                        <td class="p-3 uppercase">{{ $order->payment_method }}</td>
                        <td class="p-3">{{ ucfirst($order->status) }}</td>
                        <td class="p-3 text-right">$ {{ number_format($order->total, 2) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td class="p-3 text-gray-500" colspan="5">No orders yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


