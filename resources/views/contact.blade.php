<x-app-layout>
    <!-- Hero Section with Contact Info -->
    <section class="relative bg-cover bg-bottom" style="background-image: url('{{ asset('images/hero-bg.png') }}');">
        <div class="max-w-7xl mx-auto px-6 py-24">
            <!-- Main Heading -->
            <div class="grid md:grid-cols-2 gap-8 items-center mb-12">
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900">Don't hesitate to contact us if you need help.</h1>
                </div>
                <div>
                    <p class="text-gray-600 text-sm">
                        Visit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error.
                    </p>
                </div>
            </div>
            
            <!-- Contact Info -->
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-[#b97456] rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#593d2e] mb-2">Address</h3>
                    <p class="text-gray-600 text-sm">70 Washington Square South New York, NY 10012, United States</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-[#b97456] rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#593d2e] mb-2">Call Us</h3>
                    <p class="text-gray-600 text-sm">(877) 123-4567<br>(877) 123-4568</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-[#b97456] rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#593d2e] mb-2">Opening</h3>
                    <p class="text-gray-600 text-sm">Monday-Friday: 8am-4pm<br>Saturday-Sunday: 9am-5pm</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-[#b97456] rounded-full flex items-center justify-center mb-3">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#593d2e] mb-2">Contact</h3>
                    <p class="text-gray-600 text-sm">ziggy@example.com<br>info@example.com</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form + Map (Overlapping Section) -->
    <section class="relative -mt-20 z-10 pb-80">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                <div class="grid md:grid-cols-2 gap-0">
                    <!-- Form -->
                    <div class="p-8">
                        <h2 class="text-xl font-bold text-[#593d2e] mb-2">Got Any Questions?</h2>
                        <p class="text-gray-600 mb-6">Use the form below to get in touch with the sales team</p>

                        {{-- Success Message --}}
                        @if(session('success'))
                            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-md">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                            @csrf
                            <div>
                                <input type="text" name="name" placeholder="Name*" required
                                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-[#b97456] focus:border-[#b97456]">
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Email*" required
                                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-[#b97456] focus:border-[#b97456]">
                            </div>
                            <div>
                                <textarea name="message" rows="4" placeholder="Message*" required
                                          class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-[#b97456] focus:border-[#b97456]"></textarea>
                            </div>
                            <button type="submit"
                                    class="bg-[#593d2e] text-white px-6 py-2 rounded-md hover:bg-[#b97456] transition flex items-center gap-2">
                                Send Your Message
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </form>
                    </div>

                    <!-- Map -->
                    <div class="h-[400px]">
                        <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=-0.128590%2C51.5074%2C-0.1278%2C51.5074&amp;layer=mapnik"
                                class="w-full h-full border-0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Footer -->
    @include('components.footer')
    
</x-app-layout>
