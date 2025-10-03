<x-app-layout>
    <!-- Hero Section - Enhanced -->
    <section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-amber-50 via-orange-50 to-red-50">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat opacity-20" 
             style="background-image: url('/images/about.jpg');"></div>
        
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
                    <span class="text-[#b97456] font-semibold text-sm uppercase tracking-wider">🐾 About Us</span>
                </div>
                
                <!-- Main Heading -->
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black text-gray-900 leading-tight">
                    Pet Care, <span class="text-[#b97456]">Up Close</span><br>
                    <span class="bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text text-transparent">
                        And Personal
                    </span>
                </h1>
                
                <!-- Description -->
                <p class="text-xl text-gray-600 max-w-2xl leading-relaxed">
                    We believe pets deserve the best. Our mission is to provide trusted, loving care and quality products for every furry (or scaly!) friend in our community.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                    <a href="#shop" class="group inline-flex items-center px-8 py-4 bg-[#b97456] text-white rounded-2xl shadow-lg hover:bg-[#a56348] hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 text-lg font-bold">
                        <span>Shop Now</span>
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    <a href="#discover" class="group inline-flex items-center px-8 py-4 border-2 border-[#b97456] text-[#b97456] rounded-2xl hover:bg-[#b97456] hover:text-white transition-all duration-300 text-lg font-bold">
                        <span>Discover More</span>
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Image Section -->
            <div class="flex-1 mt-12 lg:mt-0 animate-fade-in-right">
                <div class="relative">
                    <!-- Image Container with Enhanced Styling -->
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl transform hover:scale-105 transition-transform duration-500">
                        <img src="/images/about.jpg" alt="About Us - Pet Care" class="w-full h-auto max-w-[600px] mx-auto block object-cover">
                        
                        <!-- Image Overlay Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent pointer-events-none"></div>
                    </div>
                    
                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 w-20 h-20 bg-[#b97456] rounded-full flex items-center justify-center shadow-lg animate-bounce">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
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

    <!-- Company Story Section -->
    <section class="bg-gradient-to-br from-gray-50 to-white py-24 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23b97456" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-fade-in-up">
                <div class="inline-flex items-center px-4 py-2 bg-[#b97456] bg-opacity-10 rounded-full border border-[#b97456] border-opacity-20 mb-6">
                    <span class="text-[#b97456] font-semibold text-sm uppercase tracking-wider">📖 Our Story</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                    Passionate About <span class="text-[#b97456]">Pet Care</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Founded with love and dedication, we've been serving the pet community for over a decade, building trust one paw at a time.
                </p>
            </div>

            <!-- Mission, Vision, Values Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Mission -->
                <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 animate-fade-in-up">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#b97456] to-orange-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Our Mission</h3>
                    <p class="text-gray-600 leading-relaxed">
                        To provide exceptional pet care products and services that enhance the health, happiness, and well-being of pets and their families.
                    </p>
                </div>

                <!-- Vision -->
                <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 animate-fade-in-up animation-delay-200">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Our Vision</h3>
                    <p class="text-gray-600 leading-relaxed">
                        To be the leading pet care destination where every pet parent finds everything they need to give their beloved companions the best life possible.
                    </p>
                </div>

                <!-- Values -->
                <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 animate-fade-in-up animation-delay-400">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Our Values</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Compassion, quality, trust, and innovation guide everything we do. We believe in treating every pet as if they were our own family.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="bg-gradient-to-r from-[#b97456] to-orange-500 py-20 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="white" fill-opacity="0.1"%3E%3Cpath d="M20 20c0-11.046-8.954-20-20-20v20h20z"/%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <!-- Stat 1 -->
                <div class="animate-fade-in-up">
                    <div class="text-4xl md:text-5xl font-black text-white mb-2">10+</div>
                    <div class="text-white text-opacity-90 font-medium">Years Experience</div>
                </div>
                
                <!-- Stat 2 -->
                <div class="animate-fade-in-up animation-delay-200">
                    <div class="text-4xl md:text-5xl font-black text-white mb-2">50K+</div>
                    <div class="text-white text-opacity-90 font-medium">Happy Customers</div>
                </div>
                
                <!-- Stat 3 -->
                <div class="animate-fade-in-up animation-delay-400">
                    <div class="text-4xl md:text-5xl font-black text-white mb-2">1000+</div>
                    <div class="text-white text-opacity-90 font-medium">Products</div>
                </div>
                
                <!-- Stat 4 -->
                <div class="animate-fade-in-up animation-delay-600">
                    <div class="text-4xl md:text-5xl font-black text-white mb-2">24/7</div>
                    <div class="text-white text-opacity-90 font-medium">Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials - Enhanced -->
    <section class="bg-gradient-to-br from-gray-50 to-white py-24 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23b97456" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-fade-in-up">
                <div class="inline-flex items-center px-4 py-2 bg-[#b97456] bg-opacity-10 rounded-full border border-[#b97456] border-opacity-20 mb-6">
                    <span class="text-[#b97456] font-semibold text-sm uppercase tracking-wider">💬 Testimonials</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                    What Our <span class="text-[#b97456]">Customers</span> Say
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Don't just take our word for it. Here's what our happy pet parents have to say about their experience with us.
                </p>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 animate-fade-in-up">
                    <div class="flex items-center mb-6">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        "The best pet store ever! My cat absolutely loves the food, and I trust their products completely. The staff is incredibly knowledgeable and caring."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-[#b97456] to-orange-500 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                            SJ
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Sarah Johnson</p>
                        <p class="text-sm text-gray-500">Cat Owner</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 animate-fade-in-up animation-delay-200">
                    <div class="flex items-center mb-6">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        "Outstanding service and quality products! My dog's health has improved significantly since switching to their recommended food. Highly recommend!"
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                            MC
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Mike Chen</p>
                            <p class="text-sm text-gray-500">Dog Owner</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="group bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500 animate-fade-in-up animation-delay-400">
                    <div class="flex items-center mb-6">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        "Amazing customer service and fast delivery! The team really cares about pets and it shows in everything they do. My birds love their treats!"
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-500 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                            AL
                        </div>
                        <div>
                            <p class="font-bold text-gray-900">Anna Lopez</p>
                            <p class="text-sm text-gray-500">Bird Owner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pet Gallery - Enhanced -->
    <section class="bg-gradient-to-br from-gray-50 to-white py-24 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23b97456" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-fade-in-up">
                <div class="inline-flex items-center px-4 py-2 bg-[#b97456] bg-opacity-10 rounded-full border border-[#b97456] border-opacity-20 mb-6">
                    <span class="text-[#b97456] font-semibold text-sm uppercase tracking-wider">🐾 Pet Gallery</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                    Our <span class="text-[#b97456]">Happy</span> Customers
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Meet some of the adorable pets we're proud to serve. Every pet deserves the best care and love.
                </p>
            </div>

            <!-- Pet Gallery Grid -->
            <div class="grid grid-cols-2 md:grid-cols-5 gap-6">
                <div class="group animate-fade-in-up">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg transform group-hover:scale-105 transition-transform duration-500">
                        <img src="/images/pet1.png" alt="Kangaroo" class="w-full h-48 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="font-semibold">Kangaroo</p>
                        </div>
                    </div>
                </div>
                
                <div class="group animate-fade-in-up animation-delay-200">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg transform group-hover:scale-105 transition-transform duration-500">
                        <img src="/images/pet2.png" alt="Chameleon" class="w-full h-48 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="font-semibold">Chameleon</p>
                        </div>
                    </div>
                </div>
                
                <div class="group animate-fade-in-up animation-delay-400">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg transform group-hover:scale-105 transition-transform duration-500">
                        <img src="/images/pet3.png" alt="Guinea pigs" class="w-full h-48 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="font-semibold">Guinea Pigs</p>
                        </div>
                    </div>
                </div>
                
                <div class="group animate-fade-in-up animation-delay-600">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg transform group-hover:scale-105 transition-transform duration-500">
                        <img src="/images/pet4.png" alt="Cat carrier" class="w-full h-48 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="font-semibold">Cat Carrier</p>
                        </div>
                    </div>
                </div>
                
                <div class="group animate-fade-in-up animation-delay-800">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg transform group-hover:scale-105 transition-transform duration-500">
                        <img src="/images/pet5.png" alt="Cat sunglasses" class="w-full h-48 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <p class="font-semibold">Stylish Cat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section - Enhanced -->
    <section class="bg-gradient-to-br from-[#b97456] via-orange-500 to-red-500 py-24 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="white" fill-opacity="0.1"%3E%3Cpath d="M20 20c0-11.046-8.954-20-20-20v20h20z"/%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-white bg-opacity-20 rounded-full animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-32 h-32 bg-white bg-opacity-10 rounded-full animate-pulse animation-delay-2000"></div>

        <div class="relative max-w-7xl mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-fade-in-up">
                <div class="inline-flex items-center px-4 py-2 bg-white bg-opacity-20 rounded-full border border-white border-opacity-30 mb-6">
                    <span class="text-white font-semibold text-sm uppercase tracking-wider">👥 Our Team</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-white mb-6">
                    Meet Our <span class="text-yellow-300">Expert</span> Team
                </h2>
                <p class="text-xl text-white text-opacity-90 max-w-3xl mx-auto">
                    Our passionate team of pet care professionals is dedicated to providing the best service for you and your furry friends.
                </p>
            </div>

            <!-- Team Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="group bg-white bg-opacity-10 backdrop-blur-sm rounded-3xl p-8 text-center hover:bg-opacity-20 transition-all duration-500 transform hover:-translate-y-2 animate-fade-in-up">
                    <div class="relative mb-6">
                        <div class="w-32 h-32 mx-auto rounded-full overflow-hidden shadow-2xl transform group-hover:scale-110 transition-transform duration-300">
                            <img src="/images/team1.jpg" alt="Dr. Emily" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-2 -right-2 w-12 h-12 bg-gradient-to-br from-[#b97456] to-orange-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-white mb-2">Dr. Emily Rodriguez</h3>
                    <p class="text-white text-opacity-80 font-medium mb-4">Lead Veterinarian</p>
                    <p class="text-white text-opacity-70 text-sm leading-relaxed">
                        With over 10 years of experience, Dr. Emily specializes in preventive care and emergency medicine for all types of pets.
                    </p>
                </div>

                <!-- Team Member 2 -->
                <div class="group bg-white bg-opacity-10 backdrop-blur-sm rounded-3xl p-8 text-center hover:bg-opacity-20 transition-all duration-500 transform hover:-translate-y-2 animate-fade-in-up animation-delay-200">
                    <div class="relative mb-6">
                        <div class="w-32 h-32 mx-auto rounded-full overflow-hidden shadow-2xl transform group-hover:scale-110 transition-transform duration-300">
                            <img src="/images/team2.jpg" alt="James Carter" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-2 -right-2 w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-white mb-2">James Carter</h3>
                    <p class="text-white text-opacity-80 font-medium mb-4">Pet Nutritionist</p>
                    <p class="text-white text-opacity-70 text-sm leading-relaxed">
                        James is a certified pet nutritionist who helps pet parents choose the best diet for their furry companions' health and happiness.
                    </p>
                </div>

                <!-- Team Member 3 -->
                <div class="group bg-white bg-opacity-10 backdrop-blur-sm rounded-3xl p-8 text-center hover:bg-opacity-20 transition-all duration-500 transform hover:-translate-y-2 animate-fade-in-up animation-delay-400">
                    <div class="relative mb-6">
                        <div class="w-32 h-32 mx-auto rounded-full overflow-hidden shadow-2xl transform group-hover:scale-110 transition-transform duration-300">
                            <img src="/images/team3.jpg" alt="Sophia Lee" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-2 -right-2 w-12 h-12 bg-gradient-to-br from-green-500 to-teal-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-white mb-2">Sophia Lee</h3>
                    <p class="text-white text-opacity-80 font-medium mb-4">Pet Trainer</p>
                    <p class="text-white text-opacity-70 text-sm leading-relaxed">
                        Sophia is a certified pet trainer with a gentle approach, helping pets and their families build strong, loving relationships.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-gradient-to-br from-gray-900 via-gray-800 to-black py-24 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23b97456" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <!-- Floating Orbs -->
        <div class="absolute top-20 right-20 w-32 h-32 bg-[#b97456] rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 left-20 w-24 h-24 bg-orange-400 rounded-full opacity-30 animate-bounce"></div>

        <div class="relative max-w-7xl mx-auto px-6 text-center">
            <div class="animate-fade-in-up">
                <div class="inline-flex items-center px-4 py-2 bg-[#b97456] bg-opacity-20 rounded-full border border-[#b97456] border-opacity-30 mb-6">
                    <span class="text-[#b97456] font-bold text-sm uppercase tracking-wider">🚀 Ready to Start?</span>
                </div>
                
                <h2 class="text-5xl md:text-6xl font-black text-white leading-tight mb-6">
                    Join Our <span class="text-[#b97456]">Pet Family</span> Today!
                </h2>
                
                <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-12 leading-relaxed">
                    Experience the difference that passionate pet care makes. Let us help you give your beloved companions the love and care they deserve.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <a href="#shop" class="group inline-flex items-center px-8 py-4 bg-[#b97456] text-white rounded-2xl shadow-lg hover:bg-[#a56348] hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300 text-lg font-bold">
                        <span>Shop Now</span>
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    <a href="#contact" class="group inline-flex items-center px-8 py-4 border-2 border-white text-white rounded-2xl hover:bg-white hover:text-gray-900 transition-all duration-300 text-lg font-bold">
                        <span>Contact Us</span>
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted Partners - Enhanced -->
    <section class="bg-gradient-to-br from-gray-50 to-white py-20 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23b97456" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-fade-in-up">
                <div class="inline-flex items-center px-4 py-2 bg-[#b97456] bg-opacity-10 rounded-full border border-[#b97456] border-opacity-20 mb-6">
                    <span class="text-[#b97456] font-semibold text-sm uppercase tracking-wider">🤝 Trusted Partners</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                    Trusted by <span class="text-[#b97456]">Leading</span> Brands
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We're proud to partner with the most trusted brands in pet care, ensuring quality and reliability for your furry friends.
                </p>
            </div>

            <!-- Logo Grid -->
            <div class="grid grid-cols-2 md:grid-cols-6 gap-8 items-center">
                <div class="group animate-fade-in-up">
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                        <img src="/images/logo1.png" alt="Partner Logo 1" class="h-12 mx-auto opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <div class="group animate-fade-in-up animation-delay-200">
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                        <img src="/images/logo2.png" alt="Partner Logo 2" class="h-12 mx-auto opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <div class="group animate-fade-in-up animation-delay-400">
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                        <img src="/images/logo3.png" alt="Partner Logo 3" class="h-12 mx-auto opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <div class="group animate-fade-in-up animation-delay-600">
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                        <img src="/images/logo4.png" alt="Partner Logo 4" class="h-12 mx-auto opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <div class="group animate-fade-in-up animation-delay-800">
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                        <img src="/images/logo5.png" alt="Partner Logo 5" class="h-12 mx-auto opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <div class="group animate-fade-in-up animation-delay-1000">
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transform hover:-translate-y-2 transition-all duration-300">
                        <img src="/images/logo6.png" alt="Partner Logo 6" class="h-12 mx-auto opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')
</x-app-layout>
