<div id="site-header">
    <!-- Top Section with Search, Logo, and Icons -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto px-6 flex items-center justify-center h-20 relative">
            <!-- Search Bar (Left) -->
            <div class="absolute left-6">
                <form method="GET" action="{{ route('shop.index') }}" class="relative">
                    <input type="text" 
                           name="search" 
                           value="{{ request('search') }}"
                           placeholder="Search products..." 
                           class="w-80 pl-4 pr-12 py-2 bg-[#f5f5f0] border-0 rounded-full text-gray-700 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:bg-white transition-all duration-200 shadow-sm">
                    <button type="submit" 
                            class="absolute right-2 top-1/2 transform -translate-y-1/2 w-8 h-8 bg-[#5C4033] rounded-full flex items-center justify-center hover:bg-[#4a3328] transition-colors duration-200">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>

            <!-- Logo (Center) -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('images/logo.png') }}" alt="FUR Logo" class="h-20">
                </a>
            </div>

            <!-- Icons (Right) -->
            <div class="absolute right-12 flex items-center space-x-6">
                <!-- Orders Icon -->
                <a href="{{ route('orders.index') }}" class="text-gray-600 hover:text-orange-500 transition-colors" aria-label="Orders">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>

                <!-- Cart Dropdown -->
                <div class="relative" x-data="{ cartOpen: false }" @click.away="cartOpen = false">
                    <button @click="cartOpen = !cartOpen" class="relative text-gray-600 hover:text-orange-500 transition-colors" aria-label="Cart">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 5m5-5v5m6-5v5" />
                        </svg>
                        <span class="absolute -top-2 -right-2 bg-orange-500 text-white text-xs rounded-full px-1 min-w-[18px] h-[18px] flex items-center justify-center">{{ session('cart.count', 0) }}</span>
                    </button>

                    <!-- Cart Dropdown Content -->
                    <div x-show="cartOpen" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg border border-gray-200 z-50"
                         style="display: none;">
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-800">Shopping Cart</h3>
                                <button @click="cartOpen = false" class="text-gray-400 hover:text-gray-600">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            
                            @php
                                $user = Auth::user();
                                $cartItems = [];
                                $cartTotal = 0;
                                $cartCount = 0;
                                
                                if ($user) {
                                    $cart = \App\Models\Cart::where('user_id', $user->id)->with('items')->first();
                                    if ($cart) {
                                        foreach ($cart->items as $item) {
                                            $product = \App\Models\Product::find($item->product_id);
                                            if ($product) {
                                                $itemTotal = $product->price * $item->qty;
                                                $cartTotal += $itemTotal;
                                                $cartCount += $item->qty;
                                                
                                                $cartItems[] = [
                                                    'id' => $item->id,
                                                    'name' => $product->name,
                                                    'price' => $product->price,
                                                    'qty' => $item->qty,
                                                    'total' => $itemTotal,
                                                    'image' => $product->images->first() ? $product->images->first()->image_path : null,
                                                ];
                                            }
                                        }
                                    }
                                }
                            @endphp

                            @if(empty($cartItems))
                                <div class="text-center py-8">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 5m5-5v5m6-5v5" />
                                    </svg>
                                    <p class="mt-2 text-sm text-gray-500">Your cart is empty</p>
                                </div>
                            @else
                                <div class="space-y-3 max-h-64 overflow-y-auto">
                                    @foreach($cartItems as $item)
                                        <div class="flex items-center space-x-3 p-2 bg-gray-50 rounded-lg">
                                            @if($item['image'])
                                                <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" class="h-12 w-12 object-cover rounded">
                                            @else
                                                <div class="h-12 w-12 bg-gray-200 rounded flex items-center justify-center">
                                                    <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                </div>
                                            @endif
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-medium text-gray-900 truncate">{{ $item['name'] }}</p>
                                                <p class="text-sm text-gray-500">Qty: {{ $item['qty'] }} × ${{ number_format($item['price'], 2) }}</p>
                                            </div>
                                            <div class="text-sm font-medium text-gray-900">
                                                ${{ number_format($item['total'], 2) }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                
                                <div class="mt-4 pt-4 border-t border-gray-200">
                                    <div class="flex justify-between items-center mb-3">
                                        <span class="text-sm font-medium text-gray-900">Total ({{ $cartCount }} items)</span>
                                        <span class="text-lg font-bold text-gray-900">${{ number_format($cartTotal, 2) }}</span>
                                    </div>
                                    <div class="space-y-2">
                                        <a href="{{ route('cart.index') }}" class="block w-full text-center bg-orange-500 text-white py-2 rounded-lg hover:bg-orange-600 transition">
                                            View Cart
                                        </a>
                                        <a href="{{ route('checkout.create') }}" class="block w-full text-center bg-gray-800 text-white py-2 rounded-lg hover:bg-gray-700 transition">
                                            Checkout
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Profile / Settings Dropdown (Jetstream) -->
                <div class="relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none">
                                    <img class="h-8 w-8 rounded-full object-cover" 
                                         src="{{ Auth::user()->profile_photo_url }}" 
                                         alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <button class="text-gray-600 hover:text-orange-500 transition-colors">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </button>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link href="{{ route('profile.show') }}">
                                Profile
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    API Tokens
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    Log Out
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Section with Navigation Links -->
    <nav x-data="{ open: false }" class="bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-center h-14 items-center">
                <!-- Navigation Links -->
                <div class="hidden sm:flex space-x-8">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-gray-800 hover:text-orange-500 transition-colors">
                        Home
                    </x-nav-link>
                    <x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')" class="text-gray-800 hover:text-orange-500 transition-colors">
                        About us
                    </x-nav-link>
                    <x-nav-link href="{{ route('shop.index') }}" :active="request()->routeIs('shop.index')" class="text-gray-800 hover:text-orange-500 transition-colors">
                        Shop
                    </x-nav-link>
                    <x-nav-link href="{{ route('discover.index') }}" :active="request()->routeIs('discover.index')" class="text-gray-800 hover:text-orange-500 transition-colors">
                        Discover
                    </x-nav-link>
                    <x-nav-link href="{{ route('contact.index') }}" :active="request()->routeIs('contact.index')" class="text-gray-800 hover:text-orange-500 transition-colors">
                        Contact Us
                    </x-nav-link>
                </div>

                <!-- Hamburger (mobile) -->
                <div class="sm:hidden flex items-center">
                    <button @click="open = ! open" class="p-2 rounded-md text-gray-600 hover:text-orange-500">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-white border-t">
            <div class="pt-4 pb-3 space-y-1">
                <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-gray-800 hover:text-orange-500">
                    Home
                </x-responsive-nav-link>
                <a href="{{ route('about') }}" class="block px-4 py-2 text-gray-800 hover:text-orange-500">About us</a>
                <a href="{{ route('shop.index') }}" class="block px-4 py-2 text-gray-800 hover:text-orange-500">Shop</a>
                <a href="{{ route('discover.index') }}" class="block px-4 py-2 text-gray-800 hover:text-orange-500">Discover</a>
                <a href="{{ route('contact.index') }}" class="block px-4 py-2 text-gray-800 hover:text-orange-500">Contact Us</a>
                <a href="{{ route('orders.index') }}" class="block px-4 py-2 text-gray-800 hover:text-orange-500">My Orders</a>
            </div>
        </div>
    </nav>
</div>
