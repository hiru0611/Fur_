<x-app-layout>
    <div class="max-w-7xl mx-auto px-6 py-10">
        <!-- Breadcrumbs -->
        <nav class="text-sm text-gray-500 mb-6 flex items-center gap-2">
            <a href="{{ url('/') }}" class="hover:text-[#b97456]">Home</a>
            <span>/</span>
            <a href="{{ route('shop.index') }}" class="hover:text-[#b97456]">Shop</a>
            <span>/</span>
            @php($category = isset($product->category_id) ? \App\Models\Category::find($product->category_id) : null)
            @if($category)
                <a href="{{ route('shop.category', $category->slug) }}" class="hover:text-[#b97456]">{{ $category->name }}</a>
                <span>/</span>
            @endif
            <span class="text-gray-700">{{ $product->name }}</span>
        </nav>

        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-800 rounded-lg border border-green-200">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="mb-6 p-4 bg-red-100 text-red-800 rounded-lg border border-red-200">
                {{ session('error') }}
            </div>
        @endif

        <div class="bg-white rounded-2xl border border-gray-200 p-6 md:p-8 grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Left: Gallery -->
            <div x-data="{active: 0, images: [
                    @foreach($product->images as $img) '{{ asset('storage/' . $img->image_path) }}', @endforeach
                ]}">
                <div class="aspect-[4/3] w-full bg-gray-50 rounded-xl flex items-center justify-center overflow-hidden">
                    @if($product->images->count())
                        <img :src="images.length ? images[active] : '{{ asset('images/placeholder.png') }}'" alt="{{ $product->name }}" class="w-full h-full object-contain">
                    @else
                        <img src="{{ asset('images/placeholder.png') }}" alt="No Image" class="w-full h-full object-contain">
                    @endif
                </div>

                <!-- Thumbnails -->
                <div class="mt-4 grid grid-cols-4 gap-3">
                    @forelse($product->images as $idx => $img)
                        <button type="button" @click="active={{ $idx }}" :class="active==={{ $idx }} ? 'ring-2 ring-[#b97456]' : ''" class="rounded-lg overflow-hidden bg-gray-50 border border-gray-200 aspect-square flex items-center justify-center">
                            <img src="{{ asset('storage/' . $img->image_path) }}" alt="thumb" class="w-full h-full object-cover">
                        </button>
                    @empty
                        <div class="col-span-4 text-center text-gray-400">No images</div>
                    @endforelse
                </div>
            </div>

            <!-- Right: Details -->
            <div>
                <h1 class="text-3xl md:text-4xl font-bold text-[#5C4033]">{{ $product->name }}</h1>

                <!-- Rating -->
                <div class="flex items-center gap-2 mt-2">
                    @for ($i = 1; $i <= 5; $i++)
                        <span class="text-lg {{ $i <= (int)($product->rating ?? 0) ? 'text-yellow-400' : 'text-gray-300' }}">★</span>
                    @endfor
                    <span class="text-sm text-gray-500">(customer review)</span>
                </div>

                <p class="mt-4 text-2xl font-semibold text-[#b97456]">$ {{ number_format($product->price, 2) }}</p>

                <p class="mt-5 text-gray-700 leading-7">
                    {{ $product->description ?? 'No description available.' }}
                </p>

                <form action="{{ route('cart.add', $product->_id) }}" method="POST" class="mt-6 flex items-center gap-4">
                    @csrf
                    <input type="number" name="quantity" value="1" min="1" class="w-16 rounded-md border-gray-300 focus:border-[#b97456] focus:ring-[#b97456]">
                    <button type="submit" class="px-6 py-3 rounded-md bg-[#5C4033] text-white hover:bg-[#4d362b]">ADD TO CART</button>
                </form>

                <div class="mt-6 flex items-center gap-8 text-sm text-gray-600">
                    <button type="button" class="hover:text-[#b97456]">❤ Browse Wishlist</button>
                    <button type="button" class="hover:text-[#b97456]">⟲ Add to compare</button>
                </div>

                <div class="mt-8 space-y-2 text-sm text-gray-600">
                    <div>
                        <span class="font-semibold">Categories:</span>
                        <span>{{ $category->name ?? 'Uncategorized' }}</span>
                    </div>
                    <div>
                        <span class="font-semibold">Tag:</span>
                        <span>{{ $product->tag ?? '—' }}</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="font-semibold">Share this product</span>
                        <a href="#" class="hover:text-[#b97456]">f</a>
                        <a href="#" class="hover:text-[#b97456]">t</a>
                        <a href="#" class="hover:text-[#b97456]">p</a>
                        <a href="#" class="hover:text-[#b97456]">in</a>
                    </div>
                </div>
            </div>
        </div>

        @if(!empty($relatedProducts) && $relatedProducts->count())
            <div class="mt-12">
                <h2 class="text-xl font-semibold text-[#5C4033] mb-4">Related products</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    @foreach($relatedProducts as $rp)
                        <a href="{{ route('shop.show', $rp->_id) }}" class="bg-white border border-gray-200 rounded-xl p-4 hover:shadow">
                            @if($rp->images->count())
                                <img src="{{ asset('storage/' . $rp->images->first()->image_path) }}" alt="{{ $rp->name }}" class="h-36 w-full object-cover rounded mb-3">
                            @else
                                <img src="{{ asset('images/placeholder.png') }}" alt="No Image" class="h-36 w-full object-cover rounded mb-3">
                            @endif
                            <div class="font-medium text-gray-800">{{ $rp->name }}</div>
                            <div class="text-[#b97456] font-semibold">$ {{ number_format($rp->price, 2) }}</div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
