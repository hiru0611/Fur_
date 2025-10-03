<x-app-layout>
    <!-- HERO (cream background + optional background image) -->
   <section 
        class="relative overflow-hidden"
        style="background-image: url('/images/hero-bg.png'); background-position: center; background-size: cover;">
        
        <!-- Overlay (subtle cream gradient) -->
        <div class="absolute inset-0 bg-gradient-to-r from-white/95 via-white/80 to-transparent"></div>

        <div class="relative max-w-7xl mx-auto px-6 py-32 lg:py-48 flex flex-col lg:flex-row items-center">
            
            <!-- Left Text -->
            <div class="flex-1 space-y-6 lg:pr-12 text-center lg:text-left">
                <p class="text-[#b97456] font-semibold uppercase tracking-wide">
                    Fast and Free Delivery
                </p>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight">
                    60% OFF! <br class="hidden md:block"> On All Puppy Food
                </h1>
                <p class="text-lg text-gray-600 max-w-xl mx-auto lg:mx-0">
                    Limited time winter sale — premium nutrition at a fraction of the price.
                </p>
                
                <div class="flex items-center justify-center lg:justify-start space-x-4 mt-6">
                    <a href="#"
                    class="inline-block bg-[#b97456] text-white px-8 py-4 rounded-xl shadow-md hover:bg-[#a56348] transition text-lg font-semibold">
                        Checkout Now →
                    </a>
                    <a href="#" class="text-gray-700 hover:underline">View All Puppy Food</a>
                </div>
            </div>

            <!-- Right Puppy Image / Video -->
            <div class="flex-1 mt-10 lg:mt-0 flex justify-center">
                <!-- Image -->
                <video class="mx-auto w-full max-w-[480px] rounded-xl shadow-lg" autoplay loop muted playsinline>
                    <source src="/videos/home.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>


    <!-- REAL PET FOOD FEATURE -->
    <section class="bg-white py-8">
        <div class="max-w-[90rem] mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Left Section - Text Content -->
                <div class="flex-1 max-w-md">
                    <p class="text-[#b97456] font-semibold uppercase tracking-wide text-sm">HIGH QUALITY</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight mt-1">
                        Real Pet Food Fresh From The Fridge.
                    </h2>
                    <p class="text-gray-600 text-base leading-relaxed mt-4">
                        That's why we gently steam our meals at low temperatures. And that's why you'll find our pet food in the fridge - where real, fresh food belongs.
                    </p>
                    <button class="bg-[#b97456] text-white px-6 py-2 rounded-lg hover:bg-[#a56347] transition flex items-center gap-2 text-sm">
                        Shop Now
                        <div class="w-6 h-6 bg-white text-[#b97456] rounded-full flex items-center justify-center">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </button>
                </div>

                <!-- Middle Section - Product Image -->
                <div class="flex-2 flex justify-center">
                    <img src="/images/real-food.png" alt="Real Pet Food Products" class="w-[50rem] h-[50rem] object-contain">
                </div>

                <!-- Right Section - Statistics -->
                <div class="flex-1 space-y-8">
                    <!-- Top Row -->
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-gray-900">100K+</p>
                            <p class="text-gray-600">Nutritional Complete</p>
                        </div>
                    </div>

                    <!-- Middle Row -->
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-gray-900">$8M</p>
                            <p class="text-gray-600">Products Sale</p>
                        </div>
                    </div>

                    <!-- Bottom Row -->
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-2xl font-bold text-gray-900">98%</p>
                            <p class="text-gray-600">Client Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DEALS SECTION -->
    <section class="relative py-64" style="background-image: url('/images/hero-bg.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Dog Food Bowls Deal -->
                <div class="bg-white bg-opacity-90 rounded-2xl p-6 h-64 flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Dog Food Bowls</h3>
                        <p class="text-gray-600 text-sm">Everything for your pet.</p>
                    </div>
                    <div class="flex justify-between items-end">
                        <div class="bg-[#b97456] rounded-full px-4 py-2">
                            <span class="text-white font-bold text-lg">50% off</span>
                        </div>
                        <div class="w-20 h-20">
                            <img src="/images/dog-bowl.png" alt="Dog Food Bowl" class="w-full h-full object-contain">
                        </div>
                    </div>
                </div>

                <!-- Best Deals Dog Toys -->
                <div class="bg-white bg-opacity-90 rounded-2xl p-6 h-64 flex flex-col justify-between">
                    <div>
                        <p class="text-[#b97456] text-xs uppercase tracking-wide mb-1">NEW ARRIVALS</p>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Best Deals Dog Toys</h3>
                    </div>
                    <div class="flex justify-between items-end">
                        <div class="bg-[#b97456] rounded-lg px-3 py-1">
                            <span class="text-white font-semibold text-sm">SAVE 15% OFF</span>
                        </div>
                        <div class="w-20 h-20">
                            <img src="/images/dog-toys.png" alt="Dog Toys" class="w-full h-full object-contain">
                        </div>
                    </div>
                </div>

                <!-- Gift For Pet People -->
                <div class="bg-white bg-opacity-90 rounded-2xl p-6 h-64 flex flex-col justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Gift For Pet People</h3>
                        <p class="text-gray-600 text-sm">Perfect gifts for pet lovers.</p>
                    </div>
                    <div class="flex justify-between items-end">
                        <div class="bg-[#b97456] rounded-full px-4 py-2">
                            <span class="text-white font-bold text-lg">30% off</span>
                        </div>
                        <div class="w-20 h-20">
                            <img src="/images/gift-box.png" alt="Gift Box" class="w-full h-full object-contain">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- DEAL OF THE DAY -->
    <section class="bg-white py-16">
        <div class="max-w-[90rem] mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- Left Section - Text Content -->
                <div class="flex-1 space-y-6">
                    <p class="text-[#b97456] font-semibold uppercase tracking-wide text-sm">DEALS OF THE DAY</p>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
                        The Best Food For Your Pet!
                    </h2>
                    <p class="text-lg text-gray-600 max-w-xl">
                        Find all the great deals for pets. <span class="text-[#b97456] font-semibold">10% Off</span> our Spring Pet Collection!
                    </p>
                    
                    <!-- Timer Section -->
                    <div class="space-y-3">
                        <p class="text-gray-700 font-medium">Hurry Up! Offer ends in:</p>
                        <div class="flex gap-6">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-[#b97456]">29</div>
                                <div class="text-sm text-gray-600">Days</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-[#b97456]">20</div>
                                <div class="text-sm text-gray-600">Hrs</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-[#b97456]">43</div>
                                <div class="text-sm text-gray-600">Mins</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-[#b97456]">24</div>
                                <div class="text-sm text-gray-600">Secs</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Button -->
                    <div class="pt-4">
                        <a href="#" class="inline-block bg-[#b97456] text-white px-4 py-3 rounded-lg hover:bg-[#a56348] transition flex items-center gap-2 text-base font-semibold w-fit">
                            Learn More
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right Section - Product Image -->
                <div class="flex-1 flex justify-center">
                    <img src="/images/deals.png" alt="Deal Product" class="w-full max-w-[80rem] h-[40rem] object-contain">
                </div>
            </div>
        </div>
    </section>

    

    @include('components.footer')
</x-app-layout>
