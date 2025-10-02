<x-app-layout>
    <div class="flex min-h-screen bg-[#fdfaf8]">
        <!-- Sidebar mimic (reuse dashboard look) -->
        <aside class="w-64 bg-[#5C4033] text-white flex flex-col py-6 px-4">
            <div class="text-2xl font-bold mb-10 px-4">Admin</div>
            <nav class="flex flex-col gap-6">
                <a href="{{ route('admin.users.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition">👤 <span>Users</span></a>
                <a href="{{ route('admin.products.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition">📦 <span>Products</span></a>
                <a href="{{ route('admin.events.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition">🎉 <span>Events</span></a>
                <a href="{{ route('admin.deals.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition">💰 <span>Deals</span></a>
                <a href="{{ route('admin.messages.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition">💌 <span>Messages</span></a>
                <a href="{{ route('admin.orders.index') }}" class="flex items-center gap-3 hover:text-[#d9b99b] transition">🧾 <span>Orders</span></a>
            </nav>
        </aside>

        <main class="flex-1 p-8">
            <h1 class="text-3xl font-bold text-[#5C4033] mb-6">Orders</h1>
            @livewire('admin.orders-table')
        </main>
    </div>
</x-app-layout>


