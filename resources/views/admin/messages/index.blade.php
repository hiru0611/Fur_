<x-app-layout>
    <div class="flex min-h-screen bg-[#fdfaf8]">
        <!-- Sidebar -->
        <aside class="w-64 bg-[#5C4033] text-white flex flex-col py-6 px-4">
            <div class="text-2xl font-bold mb-10 px-4">Admin</div>
            <nav class="flex flex-col gap-6">
                <a href="{{ route('admin.users.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition">👤 <span>Users</span></a>
                <a href="{{ route('admin.products.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition">📦 <span>Products</span></a>
                <a href="{{ route('admin.events.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition">🎉 <span>Events</span></a>
                <a href="{{ route('admin.deals.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition">💰 <span>Deals</span></a>
                <a href="{{ route('admin.messages.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition bg-[#d9b99b] text-[#5C4033] px-2 py-1 rounded">💌 <span>Messages</span></a>
                <a href="{{ route('admin.orders.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition">🧾 <span>Orders</span></a>
            </nav>
        </aside>

        <main class="flex-1 p-8">
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-3xl font-bold text-[#5C4033]">Customer Messages</h1>
                <div class="text-sm text-gray-600">
                    Total Messages: {{ $messages->count() }}
                </div>
            </div>

            @if($messages->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($messages as $message)
                        <div class="bg-white rounded-xl shadow-lg border-2 border-dashed border-orange-300 p-6 hover:shadow-xl transition-shadow duration-300">
                            <!-- Message Header -->
                            <div class="flex items-center space-x-4 mb-4">
                                <!-- Avatar -->
                                <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center text-white font-bold text-xl">
                                    {{ strtoupper(substr($message->name, 0, 1)) }}
                                </div>
                                
                                <!-- Name and Info -->
                                <div class="flex-1">
                                    <h3 class="font-bold text-gray-900 text-lg">{{ $message->name }}</h3>
                                    <p class="text-gray-600 text-sm">{{ $message->email }}</p>
                                    <p class="text-gray-500 text-xs">{{ $message->created_at->format('M d, Y \a\t g:i A') }}</p>
                                </div>
                            </div>

                            <!-- Message Content -->
                            <div class="mb-4">
                                <div class="bg-gray-50 rounded-lg p-4 border-l-4 border-orange-400">
                                    <p class="text-gray-800 leading-relaxed italic">
                                        "{{ $message->message }}"
                                    </p>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                                <div class="flex space-x-2">
                                    <a href="mailto:{{ $message->email }}" 
                                       class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm hover:bg-blue-200 transition">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        Reply
                                    </a>
                                    
                                    <button onclick="copyToClipboard('{{ $message->email }}')" 
                                            class="inline-flex items-center px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200 transition">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                        Copy Email
                                    </button>
                                </div>
                                
                                <!-- Status and Delete -->
                                <div class="flex items-center space-x-3">
                                    <!-- Status Indicator -->
                                    <div class="flex items-center space-x-1">
                                        <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                                        <span class="text-xs text-gray-500">New</span>
                                    </div>
                                    
                                    <!-- Delete Button -->
                                    <form method="POST" action="{{ route('admin.messages.destroy', $message->_id) }}" class="inline" onsubmit="return confirm('Are you sure you want to delete this message?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 transition">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No messages yet</h3>
                    <p class="text-gray-500">Customer messages will appear here when they contact you through the contact form.</p>
                </div>
            @endif
        </main>
    </div>

    <script>
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                // Show a temporary success message
                const button = event.target.closest('button');
                const originalText = button.innerHTML;
                button.innerHTML = '<svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Copied!';
                button.classList.add('bg-green-100', 'text-green-700');
                button.classList.remove('bg-gray-100', 'text-gray-700');
                
                setTimeout(() => {
                    button.innerHTML = originalText;
                    button.classList.remove('bg-green-100', 'text-green-700');
                    button.classList.add('bg-gray-100', 'text-gray-700');
                }, 2000);
            });
        }
    </script>
</x-app-layout>
