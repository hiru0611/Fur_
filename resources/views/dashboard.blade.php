<x-app-layout>
    <!-- HERO SECTION - Enhanced -->
    <section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-amber-50 via-orange-50 to-red-50">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-20" 
             style="background-image: url('/images/bgimg.png');"></div>
        
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-[#b97456] rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-orange-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse animation-delay-2000"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-32 flex flex-col lg:flex-row items-center min-h-screen">
            <!-- Left Text Content -->
            <div class="flex-1 space-y-8 lg:pr-16 animate-fade-in-up">
                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-2 bg-[#b97456] bg-opacity-10 rounded-full border border-[#b97456] border-opacity-20">
                    <span class="text-[#b97456] font-semibold text-sm uppercase tracking-wider">🚚 Fast and Free Delivery</span>
                </div>
                
                <!-- Main Heading -->
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-gray-900 leading-tight">
                    <span class="text-[#b97456]">60% OFF!</span><br>
                    <span class="bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text text-transparent">
                        On All Puppy Food
                    </span>
                </h1>
                
                <!-- Description -->
                <p class="text-xl text-gray-600 max-w-2xl leading-relaxed">
                    Limited time winter sale — premium nutrition at a fraction of the price. 
                    <span class="text-[#b97456] font-semibold">Don't miss out!</span>
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                    <a href="#" class="group inline-flex items-center px-8 py-4 bg-[#b97456] text-white rounded-2xl shadow-lg hover:bg-[#a56348] hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 text-lg font-bold">
                        <span>Shop Now</span>
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    <a href="#" class="group inline-flex items-center text-gray-700 hover:text-[#b97456] transition-colors duration-300 font-medium">
                        <span>View All Puppy Food</span>
                        <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Video Section -->
            <div class="flex-1 mt-12 lg:mt-0 animate-fade-in-right">
                <div class="relative">
                    <!-- Video Container with Enhanced Styling -->
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-500">
                        <video 
                            src="/videos/Home.mp4" 
                            autoplay 
                            muted 
                            loop 
                            playsinline
                            class="w-full h-auto max-w-[600px] mx-auto block"
                            alt="Home Video">
                            Your browser does not support the video tag.
                        </video>
                        
                        <!-- Video Overlay Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
                    </div>
                    
                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 w-20 h-20 bg-[#b97456] rounded-full flex items-center justify-center shadow-lg animate-bounce">
                        <span class="text-white font-bold text-2xl">60%</span>
                    </div>
                    
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-orange-400 rounded-full flex items-center justify-center shadow-lg animate-pulse">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- REAL PET FOOD FEATURE - Enhanced -->
    <section class="bg-gradient-to-br from-gray-50 to-white py-20 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23b97456" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-16 items-center">
                <!-- Left Section - Text Content -->
                <div class="lg:col-span-1 space-y-8 animate-fade-in-left">
                    <!-- Badge -->
                    <div class="inline-flex items-center px-4 py-2 bg-[#b97456] bg-opacity-10 rounded-full border border-[#b97456] border-opacity-20">
                        <span class="text-[#b97456] font-semibold text-sm uppercase tracking-wider">🥘 HIGH QUALITY</span>
                    </div>
                    
                    <!-- Heading -->
                    <h2 class="text-4xl md:text-5xl font-black text-gray-900 leading-tight">
                        Real Pet Food <span class="text-[#b97456]">Fresh</span> From The Fridge.
                    </h2>
                    
                    <!-- Description -->
                    <p class="text-lg text-gray-600 leading-relaxed">
                        That's why we gently steam our meals at low temperatures. And that's why you'll find our pet food in the fridge - where real, fresh food belongs.
                    </p>
                    
                    <!-- CTA Button -->
                    <button class="group inline-flex items-center px-8 py-4 bg-[#b97456] text-white rounded-2xl shadow-lg hover:bg-[#a56347] hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 font-bold">
                        <span>Shop Now</span>
                        <div class="ml-3 w-8 h-8 bg-white text-[#b97456] rounded-full flex items-center justify-center group-hover:rotate-45 transition-transform duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </button>
                </div>

                <!-- Middle Section - Product Image -->
                <div class="lg:col-span-1 flex justify-center animate-fade-in-up">
                    <div class="relative group">
                        <div class="absolute -inset-4 bg-gradient-to-r from-[#b97456] to-orange-400 rounded-3xl blur opacity-25 group-hover:opacity-40 transition duration-1000"></div>
                        <div class="relative bg-white rounded-3xl p-8 shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
                            <img src="/images/real-food.png" alt="Real Pet Food Products" class="w-full h-auto max-w-md object-contain">
                        </div>
                    </div>
                </div>

                <!-- Right Section - Statistics -->
                <div class="lg:col-span-1 space-y-8 animate-fade-in-right">
                    <!-- Top Stat -->
                    <div class="group flex items-center gap-6 p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-3xl font-black text-gray-900">100K+</p>
                            <p class="text-gray-600 font-medium">Nutritional Complete</p>
                        </div>
                    </div>

                    <!-- Middle Stat -->
                    <div class="group flex items-center gap-6 p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-pink-400 to-pink-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-3xl font-black text-gray-900">$8M</p>
                            <p class="text-gray-600 font-medium">Products Sale</p>
                        </div>
                    </div>

                    <!-- Bottom Stat -->
                    <div class="group flex items-center gap-6 p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-3xl font-black text-gray-900">98%</p>
                            <p class="text-gray-600 font-medium">Client Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DEALS SECTION - Enhanced -->
    <section class="relative py-24 bg-gradient-to-br from-[#b97456] via-orange-500 to-red-500 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="white" fill-opacity="0.1"%3E%3Cpath d="M20 20c0-11.046-8.954-20-20-20v20h20z"/%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-white bg-opacity-20 rounded-full animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-32 h-32 bg-white bg-opacity-10 rounded-full animate-pulse animation-delay-2000"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white bg-opacity-15 rounded-full animate-bounce"></div>

        <div class="relative max-w-7xl mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-4">
                    Amazing <span class="text-yellow-300">Deals</span>
                </h2>
                <p class="text-xl text-white text-opacity-90 max-w-2xl mx-auto">
                    Don't miss out on these incredible offers for your furry friends
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Dog Food Bowls Deal -->
                <div class="group bg-white rounded-3xl p-8 shadow-2xl hover:shadow-3xl transform hover:-translate-y-4 transition-all duration-500 animate-fade-in-up">
                    <div class="flex flex-col h-full">
                        <div class="flex-1">
                            <div class="inline-flex items-center px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-semibold mb-4">
                                🏆 BEST SELLER
                            </div>
                            <h3 class="text-2xl font-black text-gray-900 mb-3">Dog Food Bowls</h3>
                            <p class="text-gray-600 mb-6">Premium quality bowls for your pet's dining experience.</p>
                        </div>
                        <div class="flex justify-between items-end">
                            <div class="bg-gradient-to-r from-[#b97456] to-orange-500 rounded-2xl px-6 py-3 shadow-lg">
                                <span class="text-white font-black text-xl">50% OFF</span>
                            </div>
                            <div class="w-24 h-24 transform group-hover:scale-110 transition-transform duration-300">
                                <img src="/images/dog-bowl.png" alt="Dog Food Bowl" class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Best Deals Dog Toys -->
                <div class="group bg-white rounded-3xl p-8 shadow-2xl hover:shadow-3xl transform hover:-translate-y-4 transition-all duration-500 animate-fade-in-up animation-delay-200">
                    <div class="flex flex-col h-full">
                        <div class="flex-1">
                            <div class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-semibold mb-4">
                                🆕 NEW ARRIVALS
                            </div>
                            <h3 class="text-2xl font-black text-gray-900 mb-3">Best Deals Dog Toys</h3>
                            <p class="text-gray-600 mb-6">Interactive toys to keep your dog entertained and happy.</p>
                        </div>
                        <div class="flex justify-between items-end">
                            <div class="bg-gradient-to-r from-blue-500 to-purple-500 rounded-2xl px-6 py-3 shadow-lg">
                                <span class="text-white font-black text-lg">SAVE 15%</span>
                            </div>
                            <div class="w-24 h-24 transform group-hover:scale-110 transition-transform duration-300">
                                <img src="/images/dog-toys.png" alt="Dog Toys" class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gift For Pet People -->
                <div class="group bg-white rounded-3xl p-8 shadow-2xl hover:shadow-3xl transform hover:-translate-y-4 transition-all duration-500 animate-fade-in-up animation-delay-400">
                    <div class="flex flex-col h-full">
                        <div class="flex-1">
                            <div class="inline-flex items-center px-3 py-1 bg-pink-100 text-pink-800 rounded-full text-xs font-semibold mb-4">
                                🎁 GIFT SPECIAL
                            </div>
                            <h3 class="text-2xl font-black text-gray-900 mb-3">Gift For Pet People</h3>
                            <p class="text-gray-600 mb-6">Perfect gifts for pet lovers and their beloved companions.</p>
                        </div>
                        <div class="flex justify-between items-end">
                            <div class="bg-gradient-to-r from-pink-500 to-red-500 rounded-2xl px-6 py-3 shadow-lg">
                                <span class="text-white font-black text-xl">30% OFF</span>
                            </div>
                            <div class="w-24 h-24 transform group-hover:scale-110 transition-transform duration-300">
                                <img src="/images/gift-box.png" alt="Gift Box" class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Deals Button -->
            <div class="text-center mt-12 animate-fade-in-up animation-delay-600">
                <button class="group inline-flex items-center px-8 py-4 bg-white text-[#b97456] rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 font-bold">
                    <span>View All Deals</span>
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    
    <!-- DEAL OF THE DAY - Enhanced -->
    <section class="bg-gradient-to-br from-gray-900 via-gray-800 to-black py-24 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23b97456" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <!-- Floating Orbs -->
        <div class="absolute top-20 right-20 w-32 h-32 bg-[#b97456] rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 left-20 w-24 h-24 bg-orange-400 rounded-full opacity-30 animate-bounce"></div>

        <div class="relative max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Left Section - Text Content -->
                <div class="space-y-8 animate-fade-in-left">
                    <!-- Badge -->
                    <div class="inline-flex items-center px-4 py-2 bg-[#b97456] bg-opacity-20 rounded-full border border-[#b97456] border-opacity-30">
                        <span class="text-[#b97456] font-bold text-sm uppercase tracking-wider">⏰ DEALS OF THE DAY</span>
                    </div>
                    
                    <!-- Heading -->
                    <h2 class="text-5xl md:text-6xl font-black text-white leading-tight">
                        The Best Food For Your <span class="text-[#b97456]">Pet!</span>
                    </h2>
                    
                    <!-- Description -->
                    <p class="text-xl text-gray-300 max-w-2xl leading-relaxed">
                        Find all the great deals for pets. <span class="text-[#b97456] font-bold">10% Off</span> our Spring Pet Collection!
                    </p>
                    
                    <!-- Enhanced Timer Section -->
                    <div class="space-y-6">
                        <p class="text-white font-semibold text-lg">⏰ Hurry Up! Offer ends in:</p>
                        <div class="grid grid-cols-4 gap-4">
                            <div class="text-center bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-4 border border-white border-opacity-20">
                                <div class="text-3xl font-black text-[#b97456] mb-1">29</div>
                                <div class="text-sm text-gray-300 font-medium">Days</div>
                            </div>
                            <div class="text-center bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-4 border border-white border-opacity-20">
                                <div class="text-3xl font-black text-[#b97456] mb-1">20</div>
                                <div class="text-sm text-gray-300 font-medium">Hours</div>
                            </div>
                            <div class="text-center bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-4 border border-white border-opacity-20">
                                <div class="text-3xl font-black text-[#b97456] mb-1">43</div>
                                <div class="text-sm text-gray-300 font-medium">Minutes</div>
                            </div>
                            <div class="text-center bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-4 border border-white border-opacity-20">
                                <div class="text-3xl font-black text-[#b97456] mb-1">24</div>
                                <div class="text-sm text-gray-300 font-medium">Seconds</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Enhanced Button -->
                    <div class="pt-4">
                        <a href="#" class="group inline-flex items-center px-8 py-4 bg-[#b97456] text-white rounded-2xl shadow-lg hover:bg-[#a56348] hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 font-bold">
                            <span>Shop Now</span>
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right Section - Product Image -->
                <div class="flex justify-center animate-fade-in-right">
                    <div class="relative group">
                        <!-- Glow Effect -->
                        <div class="absolute -inset-8 bg-gradient-to-r from-[#b97456] to-orange-400 rounded-3xl blur-2xl opacity-30 group-hover:opacity-50 transition duration-1000"></div>
                        
                        <!-- Image Container -->
                        <div class="relative bg-white bg-opacity-10 backdrop-blur-sm rounded-3xl p-8 border border-white border-opacity-20 transform group-hover:scale-105 transition-transform duration-500">
                            <img src="/images/deals.png" alt="Deal Product" class="w-full h-auto max-w-lg object-contain">
                        </div>
                        
                        <!-- Floating Discount Badge -->
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-r from-[#b97456] to-orange-500 rounded-full flex items-center justify-center shadow-2xl animate-bounce">
                            <span class="text-white font-black text-lg">10%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    @include('components.footer')
</x-app-layout>
