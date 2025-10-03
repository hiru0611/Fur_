<x-app-layout>
    <!-- Hero Section -->
    <section class="relative bg-cover bg-bottom" style="background-image: url('{{ asset('images/hero-bg.png') }}');">
        <div class="max-w-7xl mx-auto px-6 py-24">
            <!-- Main Heading -->
            <div class="grid md:grid-cols-2 gap-8 items-center mb-12">
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900">Discover Amazing Pet Events & Deals</h1>
                </div>
                <div>
                    <p class="text-gray-600 text-sm">
                        Explore our curated collection of pet events, special deals, and community activities. 
                        Find the perfect events for you and your furry friends to enjoy together.
                    </p>
                </div>
            </div>
            
            <!-- Quick Stats -->
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-[#b97456] rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#593d2e] mb-2">Events</h3>
                    <p class="text-gray-600 text-sm">Community gatherings, workshops, and fun activities for pets and owners</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-[#b97456] rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732L14.146 12.8l-1.179 4.456a1 1 0 01-1.856.416L9.5 15.134 6.146 13.2a1 1 0 010-1.732L9.5 9.134l1.179-4.456A1 1 0 0112 2z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#593d2e] mb-2">Deals</h3>
                    <p class="text-gray-600 text-sm">Exclusive discounts on pet supplies, services, and products</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-[#b97456] rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#593d2e] mb-2">Community</h3>
                    <p class="text-gray-600 text-sm">Connect with fellow pet lovers and share experiences</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-[#b97456] rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#593d2e] mb-2">Updates</h3>
                    <p class="text-gray-600 text-sm">Stay informed about the latest pet-related news and events</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="relative z-10 pb-20">
        <livewire:discover-page />
    </section>

    <!-- Footer -->
    @include('components.footer')
</x-app-layout>
