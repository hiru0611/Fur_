<x-app-layout>
    <style>
        .slider {
            -webkit-appearance: none;
            appearance: none;
            background: #e5e7eb;
            outline: none;
            border-radius: 8px;
        }
        
        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            background: #b97456;
            cursor: pointer;
            border-radius: 50%;
            border: 2px solid #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        
        .slider::-moz-range-thumb {
            width: 20px;
            height: 20px;
            background: #b97456;
            cursor: pointer;
            border-radius: 50%;
            border: 2px solid #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
    </style>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-bottom" style="background-image: url('{{ asset('images/hero-bg.png') }}');">
        <div class="max-w-7xl mx-auto px-6 py-24">
            <!-- Main Heading -->
            <div class="grid md:grid-cols-2 gap-8 items-center mb-12">
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900">Shop for Your Beloved Pets</h1>
                </div>
                <div>
                    <p class="text-gray-600 text-sm">
                        Discover premium pet supplies, toys, food, and accessories for dogs, cats, fish, and rabbits. 
                        Quality products that your furry, scaly, and fluffy friends will love.
                    </p>
                </div>
            </div>
            
            <!-- Shop Features -->
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-[#b97456] rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2L3 7v11a1 1 0 001 1h12a1 1 0 001-1V7l-7-5zM8 15v-4h4v4H8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#593d2e] mb-2">Premium Quality</h3>
                    <p class="text-gray-600 text-sm">Only the best products for your pets' health and happiness</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-[#b97456] rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#593d2e] mb-2">All Pet Types</h3>
                    <p class="text-gray-600 text-sm">Products for dogs, cats, fish, rabbits, and more</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-[#b97456] rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#593d2e] mb-2">Expert Approved</h3>
                    <p class="text-gray-600 text-sm">Veterinarian recommended products and brands</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-[#b97456] rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#593d2e] mb-2">Fast Delivery</h3>
                    <p class="text-gray-600 text-sm">Quick and reliable shipping to your doorstep</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="relative z-10 pb-20">
        <div class="container mx-auto px-6 py-8">
        <!-- Shop By Pet -->
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Shop By Pet 🐾</h2>
        <div class="grid grid-cols-4 gap-6 mb-12">
            @foreach($categories as $category)
                <a href="{{ route('shop.category', $category->slug) }}" 
                   class="bg-white shadow rounded-xl p-6 flex flex-col items-center hover:shadow-lg cursor-pointer transition-all duration-200 hover:scale-105">
                    @if($category->slug === 'dog')
                        <img src="{{ asset('images/dog.png') }}" 
                             class="h-20 mb-3 object-contain" 
                             alt="{{ $category->name }}">
                    @elseif($category->slug === 'cat')
                        <img src="{{ asset('images/cat.png') }}" 
                             class="h-20 mb-3 object-contain" 
                             alt="{{ $category->name }}">
                    @elseif($category->slug === 'fish')
                        <img src="{{ asset('images/fish.png') }}" 
                             class="h-20 mb-3 object-contain" 
                             alt="{{ $category->name }}">
                    @elseif($category->slug === 'rabbit')
                        <img src="{{ asset('images/bunny.png') }}" 
                             class="h-20 mb-3 object-contain" 
                             alt="{{ $category->name }}">
                    @else
                        <div class="h-20 mb-3 flex items-center justify-center text-4xl">
                            🐾
                        </div>
                    @endif
                    <p class="font-semibold">{{ $category->name }}</p>
                </a>
            @endforeach
        </div>

        <div class="grid grid-cols-4 gap-10">
            <!-- Sidebar -->
            <aside class="col-span-1">
                <!-- Search Bar -->
                <div class="mb-6">
                    <form method="GET" action="{{ route('shop.index') }}" class="relative">
                        <input type="text" 
                               name="search" 
                               value="{{ request('search') }}"
                               placeholder="Search products..." 
                               class="w-full pl-4 pr-16 py-3 bg-[#f5f5f0] border-0 rounded-full text-gray-700 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#b97456] focus:bg-white transition-all duration-200">
                        <button type="submit" 
                                class="absolute right-2 top-1/2 transform -translate-y-1/2 w-10 h-10 bg-[#5C4033] rounded-full flex items-center justify-center hover:bg-[#4a3328] transition-colors duration-200">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </form>
                </div>
                
                <div class="bg-white shadow rounded-lg p-4">
                    <h3 class="font-bold mb-4 flex items-center justify-between">
                        Filter
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                        </svg>
                    </h3>
                    
                    <div class="mb-4">
                        <h4 class="font-semibold mb-3 flex items-center justify-between">
                            Price
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                            </svg>
                        </h4>
                        
                        <form method="GET" action="{{ route('shop.index') }}" id="priceFilterForm">
                            <!-- Range Slider -->
                            <div class="mb-4">
                                <div class="relative">
                                    <input type="range" 
                                           id="priceRange" 
                                           min="0" 
                                           max="120" 
                                           value="{{ request('max_price', 20) }}"
                                           class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer slider">
                                    <div class="flex justify-between text-xs text-gray-500 mt-1">
                                        <span>0</span>
                                        <span>120</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- From/To Inputs -->
                            <div class="flex gap-2 mb-4">
                                <div class="flex-1">
                                    <label class="block text-sm text-gray-600 mb-1">From</label>
                                    <input type="number" 
                                           id="minPrice" 
                                           name="min_price" 
                                           min="0" 
                                           max="120" 
                                           value="{{ request('min_price', 0) }}"
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#b97456] focus:border-transparent">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-sm text-gray-600 mb-1">To</label>
                                    <input type="number" 
                                           id="maxPrice" 
                                           name="max_price" 
                                           min="0" 
                                           max="120" 
                                           value="{{ request('max_price', 20) }}"
                                           class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#b97456] focus:border-transparent">
                                </div>
                            </div>
                            
                            <button type="submit" 
                                    class="w-full bg-[#b97456] text-white py-2 px-4 rounded-md hover:bg-[#a56347] transition-colors duration-200 text-sm font-medium">
                                Apply Filter
                            </button>
                        </form>
                    </div>
                    
                    <a href="{{ route('shop.index') }}" 
                       class="w-full bg-gradient-to-r from-[#b97456] to-[#a56347] text-white py-2 px-4 rounded-md hover:from-[#a56347] hover:to-[#8d4f3a] transition-all duration-200 text-center block text-sm font-medium">
                        🛍️ Show All Products
                    </a>
                </div>
            </aside>

            <!-- Products -->
            <div class="col-span-3">
                @livewire('shop.products-grid', [
                    'categorySlug' => $currentCategorySlug ?? null,
                    'minPrice' => request('min_price') ? (float)request('min_price') : null,
                    'maxPrice' => request('max_price') ? (float)request('max_price') : null,
                    'search' => request('search'),
                ])
            </div>
        </div>
        
    </div>

     <div class="py-16"></div>

    <!-- Footer -->
    @include('components.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const priceRange = document.getElementById('priceRange');
            const minPriceInput = document.getElementById('minPrice');
            const maxPriceInput = document.getElementById('maxPrice');
            
            // Update max price input when slider changes
            priceRange.addEventListener('input', function() {
                maxPriceInput.value = this.value;
            });
            
            // Update slider when max price input changes
            maxPriceInput.addEventListener('input', function() {
                if (parseInt(this.value) <= parseInt(priceRange.max)) {
                    priceRange.value = this.value;
                }
            });
            
            // Update slider when min price input changes
            minPriceInput.addEventListener('input', function() {
                if (parseInt(this.value) >= parseInt(priceRange.min)) {
                    // For now, we'll just ensure min doesn't exceed max
                    if (parseInt(this.value) > parseInt(maxPriceInput.value)) {
                        maxPriceInput.value = this.value;
                        priceRange.value = this.value;
                    }
                }
            });
        });
    </script>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')
</x-app-layout>
