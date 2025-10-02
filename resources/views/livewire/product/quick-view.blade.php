<div x-data class="fixed inset-0 z-50" style="display: {{ $open ? 'block' : 'none' }};">
    @if($open && $product)
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm" @click="$wire.close()"></div>

        <!-- Modal Card -->
        <div class="absolute inset-0 flex items-center justify-center p-4">
            <div class="bg-white rounded-2xl shadow-xl max-w-3xl w-full grid grid-cols-2 overflow-hidden">
                <div class="p-4">
                    @if($product->images->count())
                        <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover rounded-xl">
                    @else
                        <img src="{{ asset('images/placeholder.png') }}" alt="No Image" class="w-full h-64 object-cover rounded-xl">
                    @endif
                </div>
                <div class="p-6 flex flex-col">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-2xl font-bold text-[#5C4033]">{{ $product->name }}</h3>
                            <p class="text-[#b97456] font-semibold mt-1">$ {{ number_format($product->price, 2) }}</p>
                        </div>
                        <button class="text-gray-500 hover:text-gray-700" @click="$wire.close()">✕</button>
                    </div>

                    <div class="mt-3 text-sm text-gray-700 leading-6 line-clamp-5">{{ $product->description ?? 'No description available.' }}</div>

                    <form action="{{ route('cart.add', $product->_id) }}" method="POST" class="mt-6">
                        @csrf
                        <div class="flex items-center space-x-3">
                            <input type="number" min="1" name="quantity" value="1" class="w-20 border rounded px-2 py-1">
                            <button type="submit" class="bg-[#b97456] text-white px-4 py-2 rounded hover:bg-[#a56347]">Add to Cart</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
</div>


