<x-app-layout>
    <!-- Hero Section -->
    <section class="relative bg-cover bg-bottom" style="background-image: url('{{ asset('images/hero-bg.png') }}');">
        <div class="max-w-7xl mx-auto px-6 py-24">
            <!-- Main Heading -->
            <div class="grid md:grid-cols-2 gap-8 items-center mb-12">
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900">About Our Pet Store</h1>
                </div>
                <div>
                    <p class="text-gray-600 text-sm">
                        We believe pets deserve the best. Our mission is to provide trusted, loving care and quality products 
                        for every furry, scaly, and fluffy friend in your family.
                    </p>
                </div>
            </div>
            
            <!-- About Features -->
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-[#b97456] rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#593d2e] mb-2">Passionate Care</h3>
                    <p class="text-gray-600 text-sm">We love pets as much as you do and it shows in everything we do</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-[#b97456] rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#593d2e] mb-2">Quality Products</h3>
                    <p class="text-gray-600 text-sm">Only the best brands and products for your pet's health and happiness</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-[#b97456] rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#593d2e] mb-2">Expert Team</h3>
                    <p class="text-gray-600 text-sm">Veterinarians and pet experts to guide you in the right direction</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-[#b97456] rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#593d2e] mb-2">Community Focus</h3>
                    <p class="text-gray-600 text-sm">Supporting local pet communities and rescue organizations</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="relative z-10 pb-20">
        <div class="bg-white shadow-lg rounded-xl overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 py-16">
                <!-- Our Story -->
                <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
                    <div>
                        <h2 class="text-2xl font-bold text-[#593d2e] mb-4">Our Story</h2>
                        <p class="text-gray-600 mb-4">
                            Founded with a simple belief: every pet deserves the best care possible. What started as a small 
                            local pet store has grown into a trusted destination for pet owners who want nothing but the best 
                            for their furry, scaly, and feathered family members.
                        </p>
                        <p class="text-gray-600">
                            We've been serving the pet community for over a decade, building relationships not just with 
                            customers, but with their beloved pets too. Our team of experts is passionate about helping 
                            you make the right choices for your pet's health and happiness.
                        </p>
                    </div>
                    <div class="flex justify-center">
                        <img src="{{ asset('images/about.jpg') }}" alt="Our Pet Store" class="rounded-lg shadow-lg max-h-80">
                    </div>
                </div>

                <!-- Pet Categories Showcase -->
                <div class="mb-20">
                    <h2 class="text-2xl font-bold text-[#593d2e] mb-12 text-center">Pets We Love</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <div class="bg-[#fef6f3] rounded-xl p-6 text-center hover:shadow-lg transition">
                            <img src="{{ asset('images/dog.png') }}" alt="Dogs" class="h-16 w-16 mx-auto mb-3">
                            <h3 class="font-semibold text-[#593d2e]">Dogs</h3>
                            <p class="text-sm text-gray-600">Loyal companions</p>
                        </div>
                        <div class="bg-[#fef6f3] rounded-xl p-6 text-center hover:shadow-lg transition">
                            <img src="{{ asset('images/cat.png') }}" alt="Cats" class="h-16 w-16 mx-auto mb-3">
                            <h3 class="font-semibold text-[#593d2e]">Cats</h3>
                            <p class="text-sm text-gray-600">Independent spirits</p>
                        </div>
                        <div class="bg-[#fef6f3] rounded-xl p-6 text-center hover:shadow-lg transition">
                            <img src="{{ asset('images/fish.png') }}" alt="Fish" class="h-16 w-16 mx-auto mb-3">
                            <h3 class="font-semibold text-[#593d2e]">Fish</h3>
                            <p class="text-sm text-gray-600">Peaceful swimmers</p>
                        </div>
                        <div class="bg-[#fef6f3] rounded-xl p-6 text-center hover:shadow-lg transition">
                            <img src="{{ asset('images/bunny.png') }}" alt="Rabbits" class="h-16 w-16 mx-auto mb-3">
                            <h3 class="font-semibold text-[#593d2e]">Rabbits</h3>
                            <p class="text-sm text-gray-600">Gentle hoppers</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonials -->
                <div class="mb-20">
                    <h2 class="text-2xl font-bold text-[#593d2e] mb-12 text-center">What Our Customers Say</h2>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-[#fef6f3] p-6 rounded-xl">
                            <p class="text-gray-700 mb-4">
                                "The best pet store ever! My cat absolutely loves the food, and I trust their products completely."
                            </p>
                            <div class="flex items-center">
                                <img src="{{ asset('images/cat.png') }}" alt="Customer" class="h-10 w-10 rounded-full mr-3">
                                <div>
                                    <p class="font-semibold text-[#593d2e]">Sarah J.</p>
                                    <p class="text-sm text-gray-500">Cat Owner</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-[#fef6f3] p-6 rounded-xl">
                            <p class="text-gray-700 mb-4">
                                "Amazing service and quality products. My dog has never been happier with his new toys and treats!"
                            </p>
                            <div class="flex items-center">
                                <img src="{{ asset('images/dog.png') }}" alt="Customer" class="h-10 w-10 rounded-full mr-3">
                                <div>
                                    <p class="font-semibold text-[#593d2e]">Mike R.</p>
                                    <p class="text-sm text-gray-500">Dog Owner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Our Team -->
                <div class="mb-20">
                    <h2 class="text-2xl font-bold text-[#593d2e] mb-12 text-center">Meet Our Team</h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="bg-white rounded-full p-4 w-24 h-24 mx-auto mb-4 shadow-lg">
                                <img src="{{ asset('images/dog.png') }}" alt="Dr. Emily" class="w-full h-full object-contain">
                            </div>
                            <h3 class="font-semibold text-[#593d2e] mb-1">Dr. Emily</h3>
                            <p class="text-sm text-gray-500">Veterinarian</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-white rounded-full p-4 w-24 h-24 mx-auto mb-4 shadow-lg">
                                <img src="{{ asset('images/cat.png') }}" alt="James Carter" class="w-full h-full object-contain">
                            </div>
                            <h3 class="font-semibold text-[#593d2e] mb-1">James Carter</h3>
                            <p class="text-sm text-gray-500">Pet Nutritionist</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-white rounded-full p-4 w-24 h-24 mx-auto mb-4 shadow-lg">
                                <img src="{{ asset('images/fish.png') }}" alt="Sophia Lee" class="w-full h-full object-contain">
                            </div>
                            <h3 class="font-semibold text-[#593d2e] mb-1">Sophia Lee</h3>
                            <p class="text-sm text-gray-500">Pet Trainer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')
</x-app-layout>
