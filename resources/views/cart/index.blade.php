<x-app-layout>
    <div class="container mx-auto px-6 py-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Your Cart</h2>

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
        @endif

        @php
            $items = $cart['items'] ?? [];
        @endphp

        @if(empty($items))
            <p class="text-gray-600">Your cart is empty.</p>
        @else
            <div class="grid grid-cols-3 gap-8">
                <div class="col-span-2 space-y-4">
                    @foreach($items as $item)
                        <div class="bg-white shadow rounded-xl p-4 flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                @if(!empty($item['image']))
                                    <img src="{{ asset('storage/' . $item['image']) }}" class="h-16 w-16 object-cover rounded" alt="{{ $item['name'] }}">
                                @endif
                                <div>
                                    <p class="font-semibold">{{ $item['name'] }}</p>
                                    <p class="text-gray-600">$ {{ number_format($item['price'], 2) }}</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <form method="POST" action="{{ route('cart.update', $item['id']) }}" class="flex items-center space-x-2">
                                    @csrf
                                    <input type="number" name="qty" value="{{ $item['qty'] }}" min="1" max="99" class="w-16 border rounded px-2 py-1">
                                    <button type="submit" class="bg-gray-800 text-white px-3 py-1 rounded">Update</button>
                                </form>
                                <form method="POST" action="{{ route('cart.remove', $item['id']) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Remove</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="bg-white shadow rounded-xl p-4 h-max">
                    <h3 class="font-bold mb-3">Order Summary</h3>
                    <div class="flex justify-between text-gray-700">
                        <span>Items</span>
                        <span>{{ $cart['count'] }}</span>
                    </div>
                    <div class="flex justify-between text-gray-700 mt-1">
                        <span>Total</span>
                        <span>$ {{ number_format($cart['total'], 2) }}</span>
                    </div>
                    <a href="{{ route('checkout.create') }}" class="mt-4 block w-full text-center bg-[#b97456] text-white py-2 rounded hover:bg-[#a56347]">Checkout</a>
                </div>
            </div>
        @endif
    </div>
</x-app-layout>


