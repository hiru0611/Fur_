<nav class="bg-white shadow-md">
    <div class="container mx-auto flex items-center justify-between px-6 py-4">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center space-x-2">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10">
            <span class="text-xl font-bold text-gray-800">FUR</span>
        </a>

        <!-- Menu -->
        <ul class="flex space-x-8 text-gray-700 font-medium">
            <li><a href="{{ route('about') }}" class="hover:text-purple-600">About us</a></li>
            <li><a href="{{ route('shop.index') }}" class="text-orange-600 font-semibold">Shop</a></li>
            <li><a href="{{ route('discover') }}" class="hover:text-purple-600">Discover</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-purple-600">Contact Us</a></li>
        </ul>

        <!-- Icons -->
        <div class="flex items-center space-x-4">
            <a href="{{ route('orders.index') }}" class="text-gray-600 hover:text-purple-600" title="My Orders"><i class="fa fa-list"></i></a>
            <a href="#" class="text-gray-600 hover:text-purple-600"><i class="fa fa-user"></i></a>
            <a href="{{ route('cart.index') }}" class="relative text-gray-600 hover:text-purple-600">
                <i class="fa fa-shopping-cart"></i>
                <span class="absolute -top-2 -right-2 bg-orange-500 text-white text-xs px-1 rounded-full">
                    {{ session('cart.count', 0) }}
                </span>
            </a>
        </div>
    </div>
</nav>
