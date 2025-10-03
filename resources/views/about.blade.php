<x-app-layout>
    <!-- Hero Section -->
    <section class="relative min-h-screen bg-gradient-to-br from-[#f8f4f0] via-[#fdf6f1] to-[#f0e6d2] overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 left-10 w-32 h-32 bg-[#b97456] rounded-full animate-pulse"></div>
            <div class="absolute top-40 right-20 w-24 h-24 bg-[#d4a574] rounded-full animate-bounce"></div>
            <div class="absolute bottom-20 left-1/4 w-16 h-16 bg-[#8b5a3c] rounded-full animate-ping"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-6 py-24 flex flex-col lg:flex-row items-center min-h-screen">
            <!-- Left -->
            <div class="lg:w-1/2 text-gray-800 space-y-8 animate-fade-in-up">
                <div class="space-y-6">
                    <h1 class="text-5xl md:text-6xl font-bold leading-tight">
                        <span class="text-[#b97456]">Pet care,</span><br>
                        <span class="text-gray-800">up close and personal.</span>
                    </h1>
                    <p class="text-xl text-gray-600 leading-relaxed">
                    We believe pets deserve the best. Our mission is to provide trusted, loving care and quality products for every furry (or scaly!) friend.
                </p>
                </div>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="#shop"
                       class="group px-8 py-4 bg-[#b97456] text-white rounded-xl hover:bg-[#593d2e] transition-all duration-300 transform hover:scale-105 hover:shadow-xl text-center font-semibold">
                        <span class="flex items-center justify-center space-x-2">
                            <span>Shop Now</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="#discover"
                       class="group px-8 py-4 border-2 border-[#b97456] text-[#b97456] rounded-xl hover:bg-[#b97456] hover:text-white transition-all duration-300 transform hover:scale-105 text-center font-semibold">
                        <span class="flex items-center justify-center space-x-2">
                            <span>Discover More</span>
                            <svg class="w-5 h-5 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <!-- Right -->
            <div class="lg:w-1/2 mt-10 lg:mt-0 flex justify-center animate-fade-in-right">
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-[#b97456] to-[#d4a574] rounded-3xl blur opacity-20 animate-pulse"></div>
                    <img src="/images/about.jpg" alt="Pets illustration" class="relative max-h-[500px] rounded-2xl shadow-2xl transform hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-24 bg-gradient-to-b from-white to-[#faf9f6] relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-10 right-10 w-40 h-40 bg-[#b97456] rounded-full animate-pulse"></div>
            <div class="absolute bottom-10 left-10 w-32 h-32 bg-[#d4a574] rounded-full animate-bounce"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                    What our <span class="text-[#b97456]">customers</span> say
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Don't just take our word for it - hear from pet parents who trust us with their furry family members
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-in-up">
                    <div class="flex items-center mb-6">
                        <div class="flex text-[#b97456]">
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
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "The best pet store ever! My cat absolutely loves the food, and I trust their products completely. The staff is knowledgeable and caring."
                    </p>
                    <div class="flex items-center space-x-4">
                        <div class="h-12 w-12 bg-gradient-to-br from-[#b97456] to-[#d4a574] rounded-full flex items-center justify-center text-white font-bold text-lg">
                            SJ
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">Sarah Johnson</p>
                        <p class="text-sm text-gray-500">Cat Owner</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-in-up" style="animation-delay: 0.2s">
                    <div class="flex items-center mb-6">
                        <div class="flex text-[#b97456]">
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
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "Amazing service and quality products! My dog has never been happier. The delivery is fast and the customer service is outstanding."
                    </p>
                    <div class="flex items-center space-x-4">
                        <div class="h-12 w-12 bg-gradient-to-br from-[#d4a574] to-[#b97456] rounded-full flex items-center justify-center text-white font-bold text-lg">
                            MR
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">Mike Rodriguez</p>
                            <p class="text-sm text-gray-500">Dog Owner</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 animate-fade-in-up md:col-span-2 lg:col-span-1" style="animation-delay: 0.4s">
                    <div class="flex items-center mb-6">
                        <div class="flex text-[#b97456]">
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
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        "Perfect for my exotic pets! The variety and quality are unmatched. My reptiles and birds are thriving with their products."
                    </p>
                    <div class="flex items-center space-x-4">
                        <div class="h-12 w-12 bg-gradient-to-br from-[#8b5a3c] to-[#b97456] rounded-full flex items-center justify-center text-white font-bold text-lg">
                            AL
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800">Alex Liu</p>
                            <p class="text-sm text-gray-500">Exotic Pet Owner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pet Image Strip -->
    <section class="py-20 bg-gradient-to-r from-[#faf9f6] to-[#f8f4f0] relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-1/4 left-1/4 w-20 h-20 bg-[#b97456] rounded-full animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-16 h-16 bg-[#d4a574] rounded-full animate-bounce"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="text-center mb-12 animate-fade-in-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Caring for <span class="text-[#b97456]">All Creatures</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    From the smallest hamster to the largest dog, we provide quality care for every pet
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-5 gap-6 items-center">
                <div class="group transform hover:scale-110 transition-all duration-300 animate-fade-in-up">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group-hover:shadow-2xl">
                        <img src="/images/cat1.png" alt="Cat" class="w-full h-32 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-2 left-2 text-white font-semibold text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Cats
                        </div>
                    </div>
                </div>
                
                <div class="group transform hover:scale-110 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.1s">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group-hover:shadow-2xl">
                        <img src="/images/dog-bowl.png" alt="Dog" class="w-full h-32 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-2 left-2 text-white font-semibold text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Dogs
                        </div>
                    </div>
                </div>
                
                <div class="group transform hover:scale-110 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.2s">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group-hover:shadow-2xl">
                        <img src="/images/dog-toys.png" alt="Small Pets" class="w-full h-32 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-2 left-2 text-white font-semibold text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Small Pets
                        </div>
                    </div>
                </div>
                
                <div class="group transform hover:scale-110 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.3s">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group-hover:shadow-2xl">
                        <img src="/images/real-food.png" alt="Birds" class="w-full h-32 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-2 left-2 text-white font-semibold text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Birds
                        </div>
                    </div>
                </div>
                
                <div class="group transform hover:scale-110 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.4s">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg group-hover:shadow-2xl">
                        <img src="/images/sleepy-cat.png" alt="Exotic Pets" class="w-full h-32 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-2 left-2 text-white font-semibold text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Exotic Pets
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-24 bg-gradient-to-br from-[#f8f4f0] via-[#fdf6f1] to-[#f0e6d2] relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-20 right-20 w-32 h-32 bg-[#b97456] rounded-full animate-pulse"></div>
            <div class="absolute bottom-20 left-20 w-24 h-24 bg-[#d4a574] rounded-full animate-bounce"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-40 h-40 bg-[#8b5a3c] rounded-full animate-ping"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-6 text-center">
            <div class="mb-16 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                    Meet Our <span class="text-[#b97456]">Expert Team</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Our passionate professionals are dedicated to providing the best care for your beloved pets
                </p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Team Member 1 -->
                <div class="group animate-fade-in-up">
                    <div class="relative mb-6">
                        <div class="absolute -inset-4 bg-gradient-to-r from-[#b97456] to-[#d4a574] rounded-full blur opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
                        <div class="relative h-48 w-48 mx-auto rounded-full overflow-hidden shadow-2xl group-hover:shadow-3xl transition-all duration-300 transform group-hover:scale-105">
                            <div class="h-full w-full bg-gradient-to-br from-[#b97456] to-[#d4a574] flex items-center justify-center text-white text-6xl font-bold">
                                DE
                            </div>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-[#b97456] transition-colors duration-300">Dr. Emily Rodriguez</h3>
                    <p class="text-lg text-[#b97456] font-semibold mb-3">Lead Veterinarian</p>
                    <p class="text-gray-600 leading-relaxed">
                        With over 10 years of experience in veterinary medicine, Dr. Emily specializes in preventive care and emergency medicine for all types of pets.
                    </p>
                    <div class="flex justify-center space-x-4 mt-6">
                        <div class="w-10 h-10 bg-[#b97456] rounded-full flex items-center justify-center text-white hover:bg-[#593d2e] transition-colors duration-300 cursor-pointer">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </div>
                        <div class="w-10 h-10 bg-[#b97456] rounded-full flex items-center justify-center text-white hover:bg-[#593d2e] transition-colors duration-300 cursor-pointer">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="group animate-fade-in-up" style="animation-delay: 0.2s">
                    <div class="relative mb-6">
                        <div class="absolute -inset-4 bg-gradient-to-r from-[#d4a574] to-[#b97456] rounded-full blur opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
                        <div class="relative h-48 w-48 mx-auto rounded-full overflow-hidden shadow-2xl group-hover:shadow-3xl transition-all duration-300 transform group-hover:scale-105">
                            <div class="h-full w-full bg-gradient-to-br from-[#d4a574] to-[#b97456] flex items-center justify-center text-white text-6xl font-bold">
                                JC
                            </div>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-[#b97456] transition-colors duration-300">James Carter</h3>
                    <p class="text-lg text-[#b97456] font-semibold mb-3">Pet Nutritionist</p>
                    <p class="text-gray-600 leading-relaxed">
                        James is a certified pet nutritionist with expertise in creating balanced diets for pets of all ages and health conditions.
                    </p>
                    <div class="flex justify-center space-x-4 mt-6">
                        <div class="w-10 h-10 bg-[#b97456] rounded-full flex items-center justify-center text-white hover:bg-[#593d2e] transition-colors duration-300 cursor-pointer">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </div>
                        <div class="w-10 h-10 bg-[#b97456] rounded-full flex items-center justify-center text-white hover:bg-[#593d2e] transition-colors duration-300 cursor-pointer">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="group animate-fade-in-up sm:col-span-2 lg:col-span-1" style="animation-delay: 0.4s">
                    <div class="relative mb-6">
                        <div class="absolute -inset-4 bg-gradient-to-r from-[#8b5a3c] to-[#b97456] rounded-full blur opacity-20 group-hover:opacity-40 transition-opacity duration-300"></div>
                        <div class="relative h-48 w-48 mx-auto rounded-full overflow-hidden shadow-2xl group-hover:shadow-3xl transition-all duration-300 transform group-hover:scale-105">
                            <div class="h-full w-full bg-gradient-to-br from-[#8b5a3c] to-[#b97456] flex items-center justify-center text-white text-6xl font-bold">
                                SL
                            </div>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-[#b97456] transition-colors duration-300">Sophia Lee</h3>
                    <p class="text-lg text-[#b97456] font-semibold mb-3">Pet Behaviorist & Trainer</p>
                    <p class="text-gray-600 leading-relaxed">
                        Sophia is a certified animal behaviorist who helps pets and their owners build stronger bonds through positive reinforcement training.
                    </p>
                    <div class="flex justify-center space-x-4 mt-6">
                        <div class="w-10 h-10 bg-[#b97456] rounded-full flex items-center justify-center text-white hover:bg-[#593d2e] transition-colors duration-300 cursor-pointer">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </div>
                        <div class="w-10 h-10 bg-[#b97456] rounded-full flex items-center justify-center text-white hover:bg-[#593d2e] transition-colors duration-300 cursor-pointer">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Logo Strip -->
    <section class="py-20 bg-gradient-to-r from-white to-[#faf9f6] relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-1/2 left-1/4 w-24 h-24 bg-[#b97456] rounded-full animate-pulse"></div>
            <div class="absolute top-1/3 right-1/3 w-20 h-20 bg-[#d4a574] rounded-full animate-bounce"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-6">
            <div class="text-center mb-12 animate-fade-in-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Trusted by <span class="text-[#b97456]">Leading Brands</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    We partner with the most trusted pet care brands to bring you the highest quality products
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-6 gap-8 items-center">
                <div class="group transform hover:scale-110 transition-all duration-300 animate-fade-in-up">
                    <div class="h-16 w-24 bg-gradient-to-br from-[#b97456] to-[#d4a574] rounded-lg flex items-center justify-center text-white font-bold text-lg shadow-lg group-hover:shadow-xl">
                        Brand
                    </div>
                </div>
                <div class="group transform hover:scale-110 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.1s">
                    <div class="h-16 w-24 bg-gradient-to-br from-[#d4a574] to-[#8b5a3c] rounded-lg flex items-center justify-center text-white font-bold text-lg shadow-lg group-hover:shadow-xl">
                        PetPro
                    </div>
                </div>
                <div class="group transform hover:scale-110 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.2s">
                    <div class="h-16 w-24 bg-gradient-to-br from-[#8b5a3c] to-[#b97456] rounded-lg flex items-center justify-center text-white font-bold text-lg shadow-lg group-hover:shadow-xl">
                        Care+
                    </div>
                </div>
                <div class="group transform hover:scale-110 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.3s">
                    <div class="h-16 w-24 bg-gradient-to-br from-[#b97456] to-[#d4a574] rounded-lg flex items-center justify-center text-white font-bold text-lg shadow-lg group-hover:shadow-xl">
                        VetMax
                    </div>
                </div>
                <div class="group transform hover:scale-110 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.4s">
                    <div class="h-16 w-24 bg-gradient-to-br from-[#d4a574] to-[#8b5a3c] rounded-lg flex items-center justify-center text-white font-bold text-lg shadow-lg group-hover:shadow-xl">
                        PetLife
                    </div>
                </div>
                <div class="group transform hover:scale-110 transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.5s">
                    <div class="h-16 w-24 bg-gradient-to-br from-[#8b5a3c] to-[#b97456] rounded-lg flex items-center justify-center text-white font-bold text-lg shadow-lg group-hover:shadow-xl">
                        Happy
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')
</x-app-layout>

<style>
    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fade-in-right {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-fade-in-up {
        animation: fade-in-up 0.8s ease-out forwards;
    }

    .animate-fade-in-right {
        animation: fade-in-right 0.8s ease-out forwards;
    }

    .shadow-3xl {
        box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
    }

    /* Smooth scrolling for anchor links */
    html {
        scroll-behavior: smooth;
    }

    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: #b97456;
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #593d2e;
    }
</style>
