<div class="bg-white shadow-lg rounded-xl overflow-hidden">
    <div class="container mx-auto px-6 py-12 grid grid-cols-4 gap-8">
        <!-- Sidebar -->
        <aside class="col-span-1">
            <!-- Search and Filter Section -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold mb-3 text-gray-800">Search Event or Deal</h3>
                <div class="space-y-4">
                    <!-- Search Bar -->
                    <div>
                        <input 
                            type="text" 
                            wire:model.live="search" 
                            placeholder="Search events or deals..." 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#b97456] focus:border-transparent"
                        >
                    </div>
                    
                    <!-- Category Filter -->
                    <div>
                        <select 
                            wire:model.live="selectedCategory" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#b97456] focus:border-transparent"
                        >
                            <option value="">All Categories</option>
                            @foreach($allCategories as $category)
                                <option value="{{ $category }}">{{ $category }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <!-- Clear Filters Button -->
                    @if($search || $selectedCategory)
                        <button 
                            wire:click="clearFilters" 
                            class="w-full px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition"
                        >
                            Clear Filters
                        </button>
                    @endif
                </div>
            </div>

            <h3 class="text-xl font-bold mb-4">Pet Event Categories</h3>
            <ul class="space-y-2 mb-8">
                @foreach($categories as $cat)
                    <li class="flex justify-between text-gray-700">
                        <span>{{ $cat['name'] }}</span>
                        <span>({{ $cat['count'] }})</span>
                    </li>
                @endforeach
            </ul>

            <h3 class="text-xl font-bold mb-4">Tags</h3>
            <div class="flex flex-wrap gap-2">
                @foreach($allTags as $tag)
                    <span class="px-3 py-1 bg-gray-100 text-sm rounded-lg">{{ $tag }}</span>
                @endforeach
            </div>
        </aside>

        <!-- Main content -->
        <main class="col-span-3">
            <!-- Results Summary -->
            @if($search || $selectedCategory)
                <div class="mb-6 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                    <p class="text-blue-800">
                        @if($search && $selectedCategory)
                            Found {{ count($deals) }} deals and {{ count($events) }} events for "{{ $search }}" in {{ $selectedCategory }} category
                        @elseif($search)
                            Found {{ count($deals) }} deals and {{ count($events) }} events for "{{ $search }}"
                        @elseif($selectedCategory)
                            Found {{ count($deals) }} deals and {{ count($events) }} events in {{ $selectedCategory }} category
                        @endif
                    </p>
                </div>
            @endif

            <!-- Deals -->
            <section class="mb-12">
                <h2 class="text-2xl font-bold mb-6">Special Deals 🐾</h2>
                @if(count($deals) > 0)
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                        @foreach($deals as $deal)
                            <div class="border rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                                <img src="{{ $deal['base64_image'] ?: $deal['image'] }}" alt="{{ $deal['title'] }}" class="w-full h-64 object-cover">
                                <div class="p-4">
                                    <h3 class="font-semibold">{{ $deal['title'] }}</h3>
                                    <p class="text-sm text-gray-600">{{ $deal['distance'] }}</p>
                                    <span class="text-red-500 font-bold">{{ $deal['discount'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-12">
                        <p class="text-gray-500 text-lg">No deals found matching your criteria.</p>
                    </div>
                @endif
            </section>

            <!-- Events -->
            <section>
                <h2 class="text-2xl font-bold mb-6">Pet Events 🐾</h2>
                @if(count($events) > 0)
                    <div class="space-y-8">
                        @foreach($events as $event)
                            <div class="border rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                                <img src="{{ $event['base64_image'] ?: $event['image'] }}" alt="{{ $event['title'] }}" class="w-full h-[32rem] object-cover">
                                <div class="p-6">
                                    <div class="flex items-center gap-3 text-sm text-gray-500 mb-2">
                                        <span>👤 {{ $event['author'] }}</span>
                                        <span>📅 {{ $event['date'] }}</span>
                                    </div>
                                    <h3 class="text-xl font-semibold mb-2">{{ $event['title'] }}</h3>
                                    <p class="text-gray-600 mb-4">{{ $event['excerpt'] }}</p>
                                    <a href="#" class="text-[#b97456] font-bold hover:underline">Read More →</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-12">
                        <p class="text-gray-500 text-lg">No events found matching your criteria.</p>
                    </div>
                @endif
            </section>
        </main>
    </div>
</div>

<script>
    // Auto-refresh data every 30 seconds to show admin updates
    setInterval(function() {
        @this.call('refreshData');
    }, 30000);
</script>
