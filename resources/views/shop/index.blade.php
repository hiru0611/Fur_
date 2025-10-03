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
    
    <div class="container mx-auto px-6 py-8">
        <!-- Shop By Pet -->
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Shop By Pet 🐾</h2>
        <div class="grid grid-cols-4 gap-6 mb-12">
            @foreach($categories as $category)
                <a href="{{ route('shop.category', $category->slug) }}" 
                   class="bg-white shadow rounded-xl p-6 flex flex-col items-center hover:shadow-lg cursor-pointer transition-all duration-200 hover:scale-105">
                    <img src="{{ asset('images/icons/' . $category->slug . '.png') }}" 
                         class="h-16 mb-3" 
                         alt="{{ $category->name }}"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                    <div class="h-16 mb-3 flex items-center justify-center text-4xl" style="display:none;">
                        @if($category->slug === 'dog') 🐕
                        @elseif($category->slug === 'cat') 🐱
                        @elseif($category->slug === 'fish') 🐠
                        @elseif($category->slug === 'rabbit') 🐰
                        @endif
                    </div>
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
</x-app-layout>
