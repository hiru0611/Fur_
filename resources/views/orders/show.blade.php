<x-app-layout>
    <div class="max-w-4xl mx-auto px-6 py-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Order #{{ $order->id }}</h2>
        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
        @endif

        <div class="bg-white shadow rounded-xl p-4 mb-6">
            <div class="flex justify-between">
                <div>
                    <p class="text-gray-700"><span class="font-semibold">Status:</span> {{ ucfirst($order->status) }}</p>
                    <p class="text-gray-700"><span class="font-semibold">Total:</span> $ {{ number_format($order->total, 2) }}</p>
                </div>
                <div>
                    <p class="text-gray-700"><span class="font-semibold">Placed at:</span> {{ $order->created_at }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white shadow rounded-xl p-4">
            <h3 class="font-semibold mb-3">Items</h3>
            <div class="divide-y">
                @foreach($order->items as $item)
                    @php
                        $product = \App\Models\Product::find($item->product_id);
                    @endphp
                    <div class="py-3 flex justify-between items-center">
                        <div class="flex items-center space-x-3">
                            @if($product && $product->images->first())
                                <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->name }}" class="h-12 w-12 object-cover rounded">
                            @endif
                            <div>
                                <div class="text-gray-700 font-medium">{{ $product->name ?? 'Product #' . $item->product_id }}</div>
                                <div class="text-sm text-gray-500">Qty: {{ $item->qty }} × ${{ number_format($item->unit_price, 2) }}</div>
                            </div>
                        </div>
                        <div class="text-gray-800 font-medium">$ {{ number_format($item->line_total, 2) }}</div>
                    </div>
                @endforeach
            </div>
            <div class="border-t mt-3 pt-3 flex justify-between text-gray-800 font-semibold">
                <span>Total</span>
                <span>$ {{ number_format($order->total, 2) }}</span>
            </div>
        </div>

        <a href="{{ route('shop.index') }}" class="inline-block mt-6 text-[#b97456] hover:underline">Continue Shopping</a>
    </div>
</x-app-layout>


