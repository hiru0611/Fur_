<div class="bg-white shadow-md rounded-xl overflow-hidden hover:shadow-xl transition p-4">
    <a href="{{ route('product.show', $product->slug) }}">
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-contain mb-3">
        <h4 class="text-gray-800 font-semibold text-sm truncate">{{ $product->name }}</h4>
        <p class="text-purple-600 font-bold mt-1">${{ number_format($product->price, 2) }}</p>
        <div class="flex items-center mt-2">
            <span class="text-yellow-400">★</span>
            <span class="ml-1 text-sm text-gray-500">({{ $product->reviews_count ?? 0 }})</span>
        </div>
    </a>
    <form action="{{ route('cart.add', $product->_id) }}" method="POST" class="mt-3">
        @csrf
        <input type="hidden" name="quantity" value="1">
        <button class="w-full bg-orange-500 text-white py-2 rounded-lg hover:bg-orange-600">Add to Cart</button>
    </form>
</div>
