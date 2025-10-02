<!-- Sidebar -->
<aside class="w-64 bg-[#5C4033] text-white flex flex-col py-6 px-4">
    <div class="text-2xl font-bold mb-10 px-4">Admin</div>

    <nav class="flex flex-col gap-6">
        <a href="{{ route('admin.users.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition">
            👤 <span>Users</span>
        </a>
        <a href="{{ route('admin.products.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition">
            📦 <span>Products</span>
        </a>
        <a href="{{ route('admin.events.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition">
            🎉 <span>Events</span>
        </a>
        <a href="{{ route('admin.deals.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition">
            💰 <span>Deals</span>
        </a>
        <a href="{{ route('admin.messages.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition relative">
            💌 <span>Messages</span>
            @php($messageCount = \App\Models\Contact::count())
            @if($messageCount > 0)
                <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-2 py-1 min-w-[20px] text-center">{{ $messageCount }}</span>
            @endif
        </a>
        <a href="{{ route('admin.orders.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition">
            🧾 <span>Orders</span>
        </a>
    </nav>
</aside>
