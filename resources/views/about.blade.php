<x-app-layout>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-[#fdf6f1] to-[#faf9f6] py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- Left Content -->
                <div class="lg:w-1/2 space-y-8">
                    <div class="space-y-6">
                        <h1 class="text-5xl md:text-6xl font-bold text-gray-800 leading-tight">
                            Pet care, <span class="text-[#b97456]">up close</span> and personal.
                        </h1>
                        <p class="text-xl text-gray-600 leading-relaxed">
                            We believe pets deserve the best. Our mission is to provide trusted, loving care and quality products for every furry (or scaly!) friend in your family.
                        </p>
                    </div>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-8 py-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[#b97456]">10K+</div>
                            <div class="text-sm text-gray-600">Happy Customers</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[#b97456]">500+</div>
                            <div class="text-sm text-gray-600">Products</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-[#b97456]">24/7</div>
                            <div class="text-sm text-gray-600">Support</div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/shop"
                           class="px-8 py-4 bg-[#b97456] text-white rounded-lg hover:bg-[#593d2e] transition-all duration-300 text-center font-semibold shadow-lg hover:shadow-xl">
                            Shop Now
                        </a>
                        <a href="/contact"
                           class="px-8 py-4 border-2 border-[#b97456] text-[#b97456] rounded-lg hover:bg-[#b97456] hover:text-white transition-all duration-300 text-center font-semibold">
                            Contact Us
                        </a>
                    </div>
                </div>
                
                <!-- Right Image -->
                <div class="lg:w-1/2 relative">
                    <div class="relative">
                        <img src="/images/about.jpg" alt="Happy pets" class="w-full max-w-lg mx-auto rounded-2xl shadow-2xl">
                        <div class="absolute -top-6 -right-6 bg-white p-4 rounded-xl shadow-lg">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="text-sm font-semibold text-gray-800">Trusted by 10,000+ pet owners</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Values Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Core Values</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We're committed to providing exceptional care and products that enhance the lives of pets and their families.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center bg-[#fdf6f1] p-8 rounded-2xl hover:shadow-lg transition-all duration-300">
                    <div class="w-20 h-20 bg-[#b97456] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Love & Care</h3>
                    <p class="text-gray-600 leading-relaxed">Every product is selected with love and care, ensuring your pet receives the best nutrition and comfort they deserve.</p>
                </div>
                <div class="text-center bg-[#fdf6f1] p-8 rounded-2xl hover:shadow-lg transition-all duration-300">
                    <div class="w-20 h-20 bg-[#b97456] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Quality Assured</h3>
                    <p class="text-gray-600 leading-relaxed">We partner with trusted brands and conduct rigorous quality checks to ensure every product meets our high standards.</p>
                </div>
                <div class="text-center bg-[#fdf6f1] p-8 rounded-2xl hover:shadow-lg transition-all duration-300">
                    <div class="w-20 h-20 bg-[#b97456] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Expert Support</h3>
                    <p class="text-gray-600 leading-relaxed">Our knowledgeable team is here to help you make the best choices for your pet's health and happiness.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-[#faf9f6]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">What Our Customers Say</h2>
                <p class="text-xl text-gray-600">Real stories from pet owners who trust us with their furry family members</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "The best pet store ever! My cat absolutely loves the food, and I trust their products completely."
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="/images/cat1.png" alt="Sarah" class="h-12 w-12 rounded-full object-cover">
                        <div>
                            <p class="font-semibold text-gray-800">Sarah J.</p>
                            <p class="text-sm text-gray-500">Cat Owner</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "Amazing customer service and the fastest delivery! My dog's new toys arrived in perfect condition."
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="/images/dog-toys.png" alt="Mike" class="h-12 w-12 rounded-full object-cover">
                        <div>
                            <p class="font-semibold text-gray-800">Mike R.</p>
                            <p class="text-sm text-gray-500">Dog Owner</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "The premium food selection is incredible. My pets are healthier and happier than ever!"
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="/images/real-food.png" alt="Lisa" class="h-12 w-12 rounded-full object-cover">
                        <div>
                            <p class="font-semibold text-gray-800">Lisa M.</p>
                            <p class="text-sm text-gray-500">Multi-pet Owner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Showcase Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Products for Every Pet</h2>
                <p class="text-xl text-gray-600">From cats and dogs to exotic pets, we have everything your furry, feathered, or scaly friends need</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-[#fdf6f1] rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="/images/cat1.png" alt="Cat Products" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Cat Essentials</h3>
                        <p class="text-gray-600 mb-4">Premium food, toys, and accessories for your feline friends</p>
                        <a href="/shop?category=cats" class="inline-flex items-center text-[#b97456] font-semibold hover:text-[#593d2e] transition">
                            Shop Cat Products 
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="bg-[#fdf6f1] rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="/images/dog-toys.png" alt="Dog Products" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Dog Supplies</h3>
                        <p class="text-gray-600 mb-4">Everything from nutritious food to fun toys for your canine companion</p>
                        <a href="/shop?category=dogs" class="inline-flex items-center text-[#b97456] font-semibold hover:text-[#593d2e] transition">
                            Shop Dog Products 
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="bg-[#fdf6f1] rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="/images/real-food.png" alt="Premium Food" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Premium Nutrition</h3>
                        <p class="text-gray-600 mb-4">High-quality, nutritious food for pets of all ages and sizes</p>
                        <a href="/shop?category=food" class="inline-flex items-center text-[#b97456] font-semibold hover:text-[#593d2e] transition">
                            Shop Food 
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-gradient-to-br from-[#b97456] to-[#593d2e] relative overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="max-w-6xl mx-auto px-6 text-center relative z-10">
            <h2 class="text-4xl font-bold text-white mb-4">Meet Our Expert Team</h2>
            <p class="text-xl text-gray-200 mb-16">Passionate professionals dedicated to your pet's wellbeing</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 hover:bg-white/20 transition-all duration-300">
                    <div class="w-32 h-32 mx-auto mb-6 bg-white/20 rounded-full flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Dr. Emily Rodriguez</h3>
                    <p class="text-gray-200 mb-4">Lead Veterinarian</p>
                    <p class="text-sm text-gray-300">15+ years of experience in pet health and wellness</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 hover:bg-white/20 transition-all duration-300">
                    <div class="w-32 h-32 mx-auto mb-6 bg-white/20 rounded-full flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">James Carter</h3>
                    <p class="text-gray-200 mb-4">Pet Nutritionist</p>
                    <p class="text-sm text-gray-300">Specialized in dietary needs for all pet types</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 hover:bg-white/20 transition-all duration-300">
                    <div class="w-32 h-32 mx-auto mb-6 bg-white/20 rounded-full flex items-center justify-center">
                        <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Sophia Lee</h3>
                    <p class="text-gray-200 mb-4">Pet Behaviorist</p>
                    <p class="text-sm text-gray-300">Expert in training and behavioral solutions</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted Partners -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h3 class="text-2xl font-semibold text-gray-800 mb-8">Trusted by Pet Owners Worldwide</h3>
            <div class="flex justify-center items-center">
                <img src="/images/logo.png" alt="Fur Ecommerce Logo" class="h-16 mx-auto">
            </div>
            <p class="text-gray-600 mt-6">Your trusted partner in pet care since 2020</p>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-[#fdf6f1]">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">Ready to Give Your Pet the Best?</h2>
            <p class="text-xl text-gray-600 mb-8">
                Join thousands of happy pet owners who trust us with their furry family members
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/shop" 
                   class="px-8 py-4 bg-[#b97456] text-white rounded-lg hover:bg-[#593d2e] transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                    Start Shopping
                </a>
                <a href="/contact" 
                   class="px-8 py-4 border-2 border-[#b97456] text-[#b97456] rounded-lg hover:bg-[#b97456] hover:text-white transition-all duration-300 font-semibold">
                    Contact Us
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')
</x-app-layout>
