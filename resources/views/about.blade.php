<x-app-layout>
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center bg-no-repeat"
             style="background-image: url('/images/about-hero-bg.png');">
        <div class="absolute inset-0 bg-gradient-to-r from-white/95 via-white/80 to-transparent"></div>

        <div class="relative max-w-7xl mx-auto px-6 py-32 flex flex-col lg:flex-row items-center">
            <!-- Left -->
            <div class="lg:w-1/2 text-gray-800 space-y-6 text-center lg:text-left">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
                    Pet care, up close and personal.
                </h1>
                <p class="text-lg text-gray-600 max-w-xl mx-auto lg:mx-0">
                    We believe pets deserve the best. Our mission is to provide trusted, loving care and quality products for every furry (or scaly!) friend.
                </p>
                <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                    <a href="#shop"
                       class="px-8 py-4 bg-[#b97456] text-white rounded-lg shadow-md hover:bg-[#a56348] transition text-lg font-semibold">
                        Shop Now →
                    </a>
                    <a href="#discover"
                       class="px-8 py-4 border-2 border-[#b97456] text-[#b97456] rounded-lg hover:bg-[#b97456] hover:text-white transition text-lg font-semibold">
                        Discover More
                    </a>
                </div>
            </div>

            <!-- Right -->
            <div class="lg:w-1/2 mt-12 lg:mt-0 flex justify-center">
                <img src="/images/about.jpg" alt="Pets illustration"
                     class="max-h-[420px] rounded-xl shadow-2xl hover:scale-105 transition transform duration-300">
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-gradient-to-b from-[#faf9f6] to-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-12">What Our Customers Say</h2>
            <div class="bg-white p-10 rounded-2xl shadow-lg border border-gray-100">
                <p class="text-lg text-gray-700 italic mb-6">
                    “The best pet store ever! My cat absolutely loves the food, and I trust their products.”
                </p>
                <div class="flex items-center justify-center space-x-4">
                    <img src="/images/testimonial-user.jpg" alt="User"
                         class="h-14 w-14 rounded-full object-cover ring-2 ring-[#b97456]">
                    <div class="text-left">
                        <p class="font-semibold text-gray-800">Sarah J.</p>
                        <p class="text-sm text-gray-500">Cat Owner</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pet Image Strip -->
    <section class="py-16 bg-[#faf9f6]">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-5 gap-6 items-center">
            @foreach (['pet1.png','pet2.png','pet3.png','pet4.png','pet5.png'] as $pet)
                <img src="/images/{{ $pet }}" alt="Pet"
                     class="rounded-xl shadow-md hover:scale-105 transition transform duration-300">
            @endforeach
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-gradient-to-r from-[#fdf6f1] via-white to-[#fdf6f1]">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-12">Meet Our Team</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
                @foreach ([
                    ['img' => 'team1.jpg', 'name' => 'Dr. Emily', 'role' => 'Veterinarian'],
                    ['img' => 'team2.jpg', 'name' => 'James Carter', 'role' => 'Pet Nutritionist'],
                    ['img' => 'team3.jpg', 'name' => 'Sophia Lee', 'role' => 'Trainer']
                ] as $member)
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition">
                        <img src="/images/{{ $member['img'] }}"
                             class="h-40 w-40 mx-auto rounded-full object-cover shadow-lg hover:scale-105 transition transform duration-300"
                             alt="{{ $member['name'] }}">
                        <h3 class="mt-4 font-semibold text-gray-800">{{ $member['name'] }}</h3>
                        <p class="text-sm text-gray-500">{{ $member['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Logo Strip -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-2 md:grid-cols-6 gap-6 items-center">
            @foreach (['logo1.png','logo2.png','logo3.png','logo4.png','logo5.png','logo6.png'] as $logo)
                <img src="/images/{{ $logo }}" alt="Logo"
                     class="h-12 mx-auto opacity-80 hover:opacity-100 transition">
            @endforeach
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')
</x-app-layout>
