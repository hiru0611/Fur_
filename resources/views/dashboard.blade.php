<x-app-layout>
    <!-- Enhanced HERO Section with Video -->
    <section class="relative bg-gradient-to-br from-orange-50 to-amber-50 overflow-hidden min-h-screen flex items-center">
        <!-- Background Video -->
        <div class="absolute inset-0 z-0">
            <video 
                autoplay 
                muted 
                loop 
                playsinline 
                class="w-full h-full object-cover opacity-20"
                poster="/images/hero-bg.png"
            >
                <source src="/videos/home.mp4" type="video/mp4">
                <!-- Fallback image if video doesn't load -->
                <img src="/images/hero-bg.png" alt="Hero Background" class="w-full h-full object-cover">
            </video>
            <!-- Overlay for better text readability -->
            <div class="absolute inset-0 bg-gradient-to-r from-white/80 via-white/60 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 py-20 lg:py-32 flex flex-col lg:flex-row items-center">
            <!-- Left Text Content -->
            <div class="flex-1 space-y-8 lg:pr-12 text-center lg:text-left">
                <!-- Badge -->
                <div class="inline-flex items-center bg-[#b97456] text-white px-4 py-2 rounded-full text-sm font-semibold shadow-lg">
                    <span class="w-2 h-2 bg-white rounded-full mr-2 animate-pulse"></span>
                    Fast and Free Delivery
                </div>
                
                <!-- Main Heading -->
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold text-gray-900 leading-tight">
                    <span class="text-[#b97456]">60% OFF!</span> <br class="hidden md:block"> 
                    On All Puppy Food
                </h1>
                
                <!-- Description -->
                <p class="text-xl text-gray-600 max-w-2xl leading-relaxed">
                    Limited time winter sale — premium nutrition at a fraction of the price. 
                    Give your furry friend the best!
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row items-center gap-4">
                    <a href="{{ route('shop.index') }}" class="group bg-[#b97456] text-white px-8 py-4 rounded-2xl shadow-xl hover:bg-[#a56348] transition-all duration-300 text-lg font-semibold transform hover:scale-105 flex items-center gap-2">
                        <span>Shop Now</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="{{ route('shop.category', 'dog') }}" class="text-gray-700 hover:text-[#b97456] transition-colors font-medium underline underline-offset-4">
                        View All Puppy Food
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="flex flex-wrap items-center gap-6 pt-4">
                    <div class="flex items-center gap-2">
                        <div class="flex text-yellow-400">
                            ★★★★★
                        </div>
                        <span class="text-sm text-gray-600">4.9/5 Rating</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-2xl">🚚</span>
                        <span class="text-sm text-gray-600">Free Shipping</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-2xl">💎</span>
                        <span class="text-sm text-gray-600">Premium Quality</span>
                    </div>
                </div>
            </div>

            <!-- Right Video Section -->
            <div class="flex-1 mt-12 lg:mt-0 flex justify-center">
                <div class="relative w-full max-w-lg">
                    <!-- Video Container with Enhanced Styling -->
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl bg-white p-4">
                        <video 
                            autoplay 
                            muted 
                            loop 
                            playsinline 
                            class="w-full h-auto rounded-2xl"
                            poster="/images/puppy.png"
                        >
                            <source src="/videos/home.mp4" type="video/mp4">
                            <!-- Fallback image -->
                            <img src="/images/puppy.png" alt="Cute Puppy" class="w-full h-auto rounded-2xl">
                        </video>
                        
                        <!-- Play Button Overlay (hidden when video is playing) -->
                        <div class="absolute inset-0 flex items-center justify-center bg-black/20 rounded-2xl opacity-0 hover:opacity-100 transition-opacity">
                            <button class="bg-white/90 text-[#b97456] rounded-full p-4 shadow-lg hover:bg-white transition-colors">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 bg-[#b97456] text-white rounded-full p-3 shadow-lg animate-bounce">
                        <span class="text-2xl">🐾</span>
                    </div>
                    <div class="absolute -bottom-4 -left-4 bg-yellow-400 text-white rounded-full p-3 shadow-lg animate-pulse">
                        <span class="text-2xl">⭐</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced REAL PET FOOD FEATURE -->
    <section class="bg-gradient-to-br from-gray-50 to-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Left Section - Enhanced Text Content -->
                <div class="flex-1 max-w-lg">
                    <div class="inline-flex items-center bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                        HIGH QUALITY
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6">
                        Real Pet Food Fresh From The Fridge.
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed mb-8">
                        That's why we gently steam our meals at low temperatures. And that's why you'll find our pet food in the fridge - where real, fresh food belongs.
                    </p>
                    <button class="group bg-[#b97456] text-white px-8 py-4 rounded-2xl hover:bg-[#a56347] transition-all duration-300 flex items-center gap-3 text-lg font-semibold shadow-lg hover:shadow-xl transform hover:scale-105">
                        <span>Shop Now</span>
                        <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center group-hover:bg-white/30 transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </button>
                </div>

                <!-- Middle Section - Enhanced Product Image -->
                <div class="flex-2 flex justify-center">
                    <div class="relative">
                        <img src="/images/real-food.png" alt="Real Pet Food Products" class="w-full max-w-2xl h-auto object-contain transform hover:scale-105 transition-transform duration-500">
                        <!-- Floating badge -->
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-bold animate-pulse">
                            FRESH!
                        </div>
                    </div>
                </div>

                <!-- Right Section - Enhanced Statistics -->
                <div class="flex-1 space-y-8">
                    <!-- Top Row -->
                    <div class="group flex items-center gap-6 p-4 rounded-2xl hover:bg-blue-50 transition-colors">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-gray-900">100K+</p>
                            <p class="text-gray-600 font-medium">Nutritional Complete</p>
                        </div>
                    </div>

                    <!-- Middle Row -->
                    <div class="group flex items-center gap-6 p-4 rounded-2xl hover:bg-pink-50 transition-colors">
                        <div class="w-16 h-16 bg-gradient-to-br from-pink-100 to-pink-200 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-gray-900">$8M</p>
                            <p class="text-gray-600 font-medium">Products Sale</p>
                        </div>
                    </div>

                    <!-- Bottom Row -->
                    <div class="group flex items-center gap-6 p-4 rounded-2xl hover:bg-green-50 transition-colors">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-100 to-green-200 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-gray-900">98%</p>
                            <p class="text-gray-600 font-medium">Client Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced DEALS SECTION -->
    <section class="relative py-20 bg-gradient-to-br from-orange-100 to-amber-100">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('/images/hero-bg.png'); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Special <span class="text-[#b97456]">Deals</span> 🎁
                </h2>
                <p class="text-xl text-gray-600">Don't miss out on these amazing offers!</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Dog Food Bowls Deal -->
                <div class="group bg-white rounded-3xl p-8 h-80 flex flex-col justify-between shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Dog Food Bowls</h3>
                        <p class="text-gray-600">Everything for your pet.</p>
                    </div>
                    <div class="flex justify-between items-end">
                        <div class="bg-gradient-to-r from-[#b97456] to-[#a56347] rounded-2xl px-6 py-3 shadow-lg">
                            <span class="text-white font-bold text-xl">50% off</span>
                        </div>
                        <div class="w-24 h-24 group-hover:scale-110 transition-transform">
                            <img src="/images/dog-bowl.png" alt="Dog Food Bowl" class="w-full h-full object-contain">
                        </div>
                    </div>
                </div>

                <!-- Best Deals Dog Toys -->
                <div class="group bg-white rounded-3xl p-8 h-80 flex flex-col justify-between shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div>
                        <div class="inline-flex items-center bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-semibold mb-3">
                            NEW ARRIVALS
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Best Deals Dog Toys</h3>
                    </div>
                    <div class="flex justify-between items-end">
                        <div class="bg-gradient-to-r from-[#b97456] to-[#a56347] rounded-xl px-4 py-2 shadow-lg">
                            <span class="text-white font-semibold">SAVE 15% OFF</span>
                        </div>
                        <div class="w-24 h-24 group-hover:scale-110 transition-transform">
                            <img src="/images/dog-toys.png" alt="Dog Toys" class="w-full h-full object-contain">
                        </div>
                    </div>
                </div>

                <!-- Gift For Pet People -->
                <div class="group bg-white rounded-3xl p-8 h-80 flex flex-col justify-between shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Gift For Pet People</h3>
                        <p class="text-gray-600">Perfect gifts for pet lovers.</p>
                    </div>
                    <div class="flex justify-between items-end">
                        <div class="bg-gradient-to-r from-[#b97456] to-[#a56347] rounded-2xl px-6 py-3 shadow-lg">
                            <span class="text-white font-bold text-xl">30% off</span>
                        </div>
                        <div class="w-24 h-24 group-hover:scale-110 transition-transform">
                            <img src="/images/gift-box.png" alt="Gift Box" class="w-full h-full object-contain">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced DEAL OF THE DAY -->
    <section class="bg-gradient-to-br from-gray-900 to-gray-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Left Section - Enhanced Text Content -->
                <div class="flex-1 space-y-8">
                    <div class="inline-flex items-center bg-[#b97456] text-white px-4 py-2 rounded-full text-sm font-semibold">
                        <span class="w-2 h-2 bg-white rounded-full mr-2 animate-pulse"></span>
                        DEALS OF THE DAY
                    </div>
                    <h2 class="text-5xl md:text-6xl font-bold leading-tight">
                        The Best Food For Your Pet!
                    </h2>
                    <p class="text-xl text-gray-300 max-w-2xl">
                        Find all the great deals for pets. <span class="text-[#b97456] font-bold">10% Off</span> our Spring Pet Collection!
                    </p>
                    
                    <!-- Enhanced Timer Section -->
                    <div class="space-y-4">
                        <p class="text-gray-300 font-medium text-lg">Hurry Up! Offer ends in:</p>
                        <div class="flex gap-6">
                            <div class="text-center bg-white/10 rounded-2xl p-4 backdrop-blur-sm">
                                <div class="text-3xl font-bold text-[#b97456]">29</div>
                                <div class="text-sm text-gray-300">Days</div>
                            </div>
                            <div class="text-center bg-white/10 rounded-2xl p-4 backdrop-blur-sm">
                                <div class="text-3xl font-bold text-[#b97456]">20</div>
                                <div class="text-sm text-gray-300">Hrs</div>
                            </div>
                            <div class="text-center bg-white/10 rounded-2xl p-4 backdrop-blur-sm">
                                <div class="text-3xl font-bold text-[#b97456]">43</div>
                                <div class="text-sm text-gray-300">Mins</div>
                            </div>
                            <div class="text-center bg-white/10 rounded-2xl p-4 backdrop-blur-sm">
                                <div class="text-3xl font-bold text-[#b97456]">24</div>
                                <div class="text-sm text-gray-300">Secs</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Enhanced Button -->
                    <div class="pt-4">
                        <a href="{{ route('shop.index') }}" class="group inline-flex items-center bg-[#b97456] text-white px-8 py-4 rounded-2xl hover:bg-[#a56348] transition-all duration-300 text-lg font-semibold shadow-xl hover:shadow-2xl transform hover:scale-105">
                            <span>Learn More</span>
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right Section - Enhanced Product Image -->
                <div class="flex-1 flex justify-center">
                    <div class="relative">
                        <img src="/images/deals.png" alt="Deal Product" class="w-full max-w-2xl h-auto object-contain transform hover:scale-105 transition-transform duration-500">
                        <!-- Floating elements -->
                        <div class="absolute -top-4 -right-4 bg-[#b97456] text-white rounded-full p-3 shadow-lg animate-bounce">
                            <span class="text-2xl">🎉</span>
                        </div>
                        <div class="absolute -bottom-4 -left-4 bg-yellow-400 text-white rounded-full p-3 shadow-lg animate-pulse">
                            <span class="text-2xl">💝</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
</x-app-layout>