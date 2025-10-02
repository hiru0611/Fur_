<div wire:poll.5s>
    <section class="grid grid-cols-3 gap-8 relative">
        @forelse($products as $product)
            <div class="bg-white shadow rounded-xl p-4 flex flex-col">
                <div class="h-64 w-full bg-gray-50 rounded mb-3 flex items-center justify-center overflow-hidden">
                    @if($product->images->count())
                        <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" 
                             alt="{{ $product->name }}" 
                             class="max-h-full max-w-full object-contain">
                    @else
                        <img src="{{ asset('images/placeholder.png') }}" 
                             alt="No Image" 
                             class="max-h-full max-w-full object-contain">
                    @endif
                </div>

                <h3 class="font-bold text-lg">{{ $product->name }}</h3>
                <p class="text-gray-600">$ {{ number_format($product->price, 2) }}</p>

                <div class="flex items-center mt-2">
                    @for ($i = 1; $i <= 5; $i++)
                        <span class="{{ $i <= (int)($product->rating ?? 0) ? 'text-yellow-400' : 'text-gray-300' }}">⭐</span>
                    @endfor
                </div>

                <a href="{{ route('shop.show', $product->_id) }}"
                   class="mt-4 bg-[#b97456] text-white px-3 py-2 rounded hover:bg-[#a56347] text-center">
                    View Details
                </a>
            </div>
        @empty
            <p class="col-span-3 text-gray-500">No products available</p>
        @endforelse
    </section>
</div>


