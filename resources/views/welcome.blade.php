<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Fur E-commerce - Premium Pet Supplies</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-[Poppins] antialiased bg-white text-gray-900">
        <!-- Navigation -->
        <nav class="bg-white shadow-sm border-b">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="/" class="flex items-center space-x-2">
                            <img src="{{ asset('images/logo.png') }}" alt="Fur E-commerce" class="h-8 w-8">
                            <span class="text-xl font-bold text-[#593d2e]">Fur E-commerce</span>
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="/shop" class="text-gray-700 hover:text-[#593d2e] transition-colors">Shop</a>
                        <a href="/discover" class="text-gray-700 hover:text-[#593d2e] transition-colors">Discover</a>
                        <a href="/about" class="text-gray-700 hover:text-[#593d2e] transition-colors">About</a>
                        <a href="/contact" class="text-gray-700 hover:text-[#593d2e] transition-colors">Contact</a>
                    </div>

                    <!-- Auth Links -->
                    <div class="flex items-center space-x-4">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-[#593d2e] transition-colors">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-700 hover:text-[#593d2e] transition-colors">
                                    Log in
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="bg-[#593d2e] text-white px-4 py-2 rounded-md hover:bg-[#b97456] transition-colors">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="relative bg-cover bg-bottom" style="background-image: url('{{ asset('images/hero-bg.png') }}');">
            <div class="max-w-7xl mx-auto px-6 py-24">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                            Welcome to <span class="text-[#593d2e]">Fur E-commerce</span>
                        </h1>
                        <p class="text-lg text-gray-600 mb-8">
                            Your one-stop destination for premium pet supplies. From nutritious food to fun toys, 
                            we have everything your furry, scaly, and fluffy friends need to live their best lives.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="/shop" class="bg-[#593d2e] text-white px-8 py-3 rounded-lg hover:bg-[#b97456] transition-colors text-center font-medium">
                                Shop Now
                            </a>
                            <a href="/discover" class="border-2 border-[#593d2e] text-[#593d2e] px-8 py-3 rounded-lg hover:bg-[#593d2e] hover:text-white transition-colors text-center font-medium">
                                Discover More
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('images/dog.png') }}" alt="Happy Pet" class="mx-auto h-64 w-64 object-contain">
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose Fur E-commerce?</h2>
                    <p class="text-lg text-gray-600">We're passionate about providing the best for your pets</p>
                </div>
                
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-[#593d2e] rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <img src="{{ asset('images/dog-bowl.png') }}" alt="Quality Food" class="h-8 w-8 object-contain">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Premium Quality</h3>
                        <p class="text-gray-600">Only the finest products for your beloved pets</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-[#593d2e] rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <img src="{{ asset('images/dog-toys.png') }}" alt="Fun Toys" class="h-8 w-8 object-contain">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Wide Selection</h3>
                        <p class="text-gray-600">Everything from food to toys in one place</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-[#593d2e] rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <img src="{{ asset('images/gift-box.png') }}" alt="Fast Delivery" class="h-8 w-8 object-contain">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Fast Delivery</h3>
                        <p class="text-gray-600">Quick and reliable shipping to your doorstep</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="bg-[#593d2e] rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <img src="{{ asset('images/real-food.png') }}" alt="Expert Care" class="h-8 w-8 object-contain">
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Expert Care</h3>
                        <p class="text-gray-600">Products recommended by pet care professionals</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pet Categories Section -->
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Shop by Pet Type</h2>
                    <p class="text-lg text-gray-600">Find the perfect products for your specific pet</p>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <a href="/shop/dog" class="group">
                        <div class="bg-white rounded-xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300 group-hover:scale-105">
                            <img src="{{ asset('images/dog.png') }}" alt="Dog Products" class="h-20 w-20 mx-auto mb-4 object-contain">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Dogs</h3>
                            <p class="text-gray-600 text-sm">Food, toys, accessories & more</p>
                        </div>
                    </a>
                    
                    <a href="/shop/cat" class="group">
                        <div class="bg-white rounded-xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300 group-hover:scale-105">
                            <img src="{{ asset('images/cat.png') }}" alt="Cat Products" class="h-20 w-20 mx-auto mb-4 object-contain">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Cats</h3>
                            <p class="text-gray-600 text-sm">Litter, food, toys & supplies</p>
                        </div>
                    </a>
                    
                    <a href="/shop/fish" class="group">
                        <div class="bg-white rounded-xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300 group-hover:scale-105">
                            <img src="{{ asset('images/fish.png') }}" alt="Fish Products" class="h-20 w-20 mx-auto mb-4 object-contain">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Fish</h3>
                            <p class="text-gray-600 text-sm">Tanks, food, filters & decor</p>
                        </div>
                    </a>
                    
                    <a href="/shop/rabbit" class="group">
                        <div class="bg-white rounded-xl p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300 group-hover:scale-105">
                            <img src="{{ asset('images/bunny.png') }}" alt="Rabbit Products" class="h-20 w-20 mx-auto mb-4 object-contain">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Rabbits</h3>
                            <p class="text-gray-600 text-sm">Housing, food, toys & care</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-[#593d2e]">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold text-white mb-4">Ready to Shop?</h2>
                <p class="text-lg text-gray-200 mb-8">Join thousands of happy pet owners who trust us with their furry friends' needs</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/register" class="bg-white text-[#593d2e] px-8 py-3 rounded-lg hover:bg-gray-100 transition-colors font-medium">
                        Create Account
                    </a>
                    <a href="/shop" class="border-2 border-white text-white px-8 py-3 rounded-lg hover:bg-white hover:text-[#593d2e] transition-colors font-medium">
                        Browse Products
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-12">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-4 gap-8">
                    <div>
                        <div class="flex items-center space-x-2 mb-4">
                            <img src="{{ asset('images/logo.png') }}" alt="Fur E-commerce" class="h-8 w-8">
                            <span class="text-xl font-bold">Fur E-commerce</span>
                        </div>
                        <p class="text-gray-400">Your trusted partner in pet care. Quality products for happy pets.</p>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a href="/shop" class="text-gray-400 hover:text-white transition-colors">Shop</a></li>
                            <li><a href="/discover" class="text-gray-400 hover:text-white transition-colors">Discover</a></li>
                            <li><a href="/about" class="text-gray-400 hover:text-white transition-colors">About</a></li>
                            <li><a href="/contact" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Customer Service</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Help Center</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Shipping Info</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Returns</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                        </ul>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Connect With Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">Facebook</a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">Twitter</a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">Instagram</a>
                        </div>
                    </div>
                </div>
                
                <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                    <p class="text-gray-400">&copy; 2024 Fur E-commerce. All rights reserved.</p>
                </div>
            </div>
        </footer>

        @livewireScripts
    </body>
</html>