<x-app-layout>
    <div class="max-w-5xl mx-auto px-6 py-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Checkout</h2>

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
        @endif

        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-2">
                <form method="POST" action="{{ route('checkout.store') }}" class="space-y-6">
                    @csrf

                    <div>
                        <h3 class="font-semibold mb-3">Delivery Address</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-2">
                                <label class="block text-sm text-gray-700 mb-1">Address Line 1</label>
                                <input type="text" name="address[line1]" class="w-full border rounded px-3 py-2" value="{{ old('address.line1') }}" required>
                                @error('address.line1')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label class="block text-sm text-gray-700 mb-1">City</label>
                                <input type="text" name="address[city]" class="w-full border rounded px-3 py-2" value="{{ old('address.city') }}" required>
                                @error('address.city')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label class="block text-sm text-gray-700 mb-1">State</label>
                                <input type="text" name="address[state]" class="w-full border rounded px-3 py-2" value="{{ old('address.state') }}">
                                @error('address.state')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label class="block text-sm text-gray-700 mb-1">Postal Code</label>
                                <input type="text" name="address[postal_code]" class="w-full border rounded px-3 py-2" value="{{ old('address.postal_code') }}" required>
                                @error('address.postal_code')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label class="block text-sm text-gray-700 mb-1">Country</label>
                                <input type="text" name="address[country]" class="w-full border rounded px-3 py-2" value="{{ old('address.country') }}" required>
                                @error('address.country')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="font-semibold mb-3">Payment Method</h3>
                        <div class="space-y-2">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="payment_method" value="cod" checked>
                                <span>Cash on Delivery (COD)</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="payment_method" value="dummy">
                                <span>Dummy Payment (simulate success)</span>
                            </label>
                        </div>
                        @error('payment_method')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
                    </div>

                    <button type="submit" class="bg-[#b97456] text-white px-6 py-2 rounded hover:bg-[#a56347]">Place Order</button>
                </form>
            </div>

            <div class="bg-white shadow rounded-xl p-4">
                <h3 class="font-semibold mb-3">Order Summary</h3>
                <div class="space-y-3">
                    @foreach($cart['items'] as $item)
                        <div class="flex justify-between">
                            <div class="text-gray-700">{{ $item['name'] }} x {{ $item['qty'] }}</div>
                            <div class="text-gray-800 font-medium">$ {{ number_format($item['qty'] * $item['price'], 2) }}</div>
                        </div>
                    @endforeach
                </div>
                <div class="border-t mt-3 pt-3 flex justify-between text-gray-800">
                    <span>Total</span>
                    <span>$ {{ number_format($cart['total'], 2) }}</span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


