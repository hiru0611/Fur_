<x-app-layout>
    <!-- Hero Section -->
    <section class="relative bg-cover bg-center bg-no-repeat"
             style="background-image: url('/images/about-hero-bg.png');">
        <div class="max-w-7xl mx-auto px-6 py-24 flex flex-col lg:flex-row items-center">
            <!-- Left -->
            <div class="lg:w-1/2 text-gray-800 space-y-6">
                <h1 class="text-4xl md:text-5xl font-bold">Pet care, up close and personal.</h1>
                <p class="text-lg text-gray-600">
                    We believe pets deserve the best. Our mission is to provide trusted, loving care and quality products for every furry (or scaly!) friend.
                </p>
                <div class="flex space-x-4">
                    <a href="#shop"
                       class="px-6 py-3 bg-[#b97456] text-white rounded-lg hover:bg-[#593d2e] transition">
                        Shop Now
                    </a>
                    <a href="#discover"
                       class="px-6 py-3 border-2 border-[#b97456] text-[#b97456] rounded-lg hover:bg-[#b97456] hover:text-white transition">
                        Discover More
                    </a>
                </div>
            </div>
            <!-- Right -->
            <div class="lg:w-1/2 mt-10 lg:mt-0 flex justify-center">
                <img src="/images/about.jpg" alt="Pets illustration" class="max-h-[400px]">
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-12">What our customers say</h2>
            <div class="bg-[#fdf6f1] p-10 rounded-2xl shadow-lg">
                <p class="text-lg text-gray-700 mb-6">
                    “The best pet store ever! My cat absolutely loves the food, and I trust their products.”
                </p>
                <div class="flex items-center justify-center space-x-4">
                    <img src="/images/testimonial-user.jpg" alt="User" class="h-12 w-12 rounded-full object-cover">
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
            <img src="/images/pet1.png" alt="Kangaroo" class="rounded-xl shadow">
            <img src="/images/pet2.png" alt="Chameleon" class="rounded-xl shadow">
            <img src="/images/pet3.png" alt="Guinea pigs" class="rounded-xl shadow">
            <img src="/images/pet4.png" alt="Cat carrier" class="rounded-xl shadow">
            <img src="/images/pet5.png" alt="Cat sunglasses" class="rounded-xl shadow">
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-cover bg-center bg-no-repeat"
             style="background-image: url('/images/hero-bg.png');">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-12">Meet Our Team</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
                <div>
                    <img src="/images/team1.jpg" class="h-40 w-40 mx-auto rounded-full object-cover shadow-lg" alt="Team 1">
                    <h3 class="mt-4 font-semibold text-gray-800">Dr. Emily</h3>
                    <p class="text-sm text-gray-500">Veterinarian</p>
                </div>
                <div>
                    <img src="/images/team2.jpg" class="h-40 w-40 mx-auto rounded-full object-cover shadow-lg" alt="Team 2">
                    <h3 class="mt-4 font-semibold text-gray-800">James Carter</h3>
                    <p class="text-sm text-gray-500">Pet Nutritionist</p>
                </div>
                <div>
                    <img src="/images/team3.jpg" class="h-40 w-40 mx-auto rounded-full object-cover shadow-lg" alt="Team 3">
                    <h3 class="mt-4 font-semibold text-gray-800">Sophia Lee</h3>
                    <p class="text-sm text-gray-500">Trainer</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Logo Strip -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid grid-cols-2 md:grid-cols-6 gap-6 items-center">
            <img src="/images/logo1.png" alt="Logo 1" class="h-12 mx-auto">
            <img src="/images/logo2.png" alt="Logo 2" class="h-12 mx-auto">
            <img src="/images/logo3.png" alt="Logo 3" class="h-12 mx-auto">
            <img src="/images/logo4.png" alt="Logo 4" class="h-12 mx-auto">
            <img src="/images/logo5.png" alt="Logo 5" class="h-12 mx-auto">
            <img src="/images/logo6.png" alt="Logo 6" class="h-12 mx-auto">
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')
</x-app-layout>
