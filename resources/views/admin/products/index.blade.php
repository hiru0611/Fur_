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
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-3xl font-bold text-[#5C4033]">Products</h1>
                <a href="{{ route('admin.products.create') }}" 
                   class="bg-[#b97456] text-white px-4 py-2 rounded hover:bg-[#a56347]">+ Add Product</a>
            </div>

            <div class="bg-white rounded-xl shadow">
                <table class="w-full">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 text-left">#</th>
                            <th class="px-4 py-2 text-left">Image</th>
                            <th class="px-4 py-2 text-left">Name</th>
                            <th class="px-4 py-2 text-left">Price</th>
                            <th class="px-4 py-2 text-left">Rating</th>
                            <th class="px-4 py-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $product->_id }}</td>
                            <td class="px-4 py-2">
                                @if($product->images->count())
                                    <img src="{{ asset('storage/' . $product->images->first()->image_path) }}" alt="Product Image" class="w-12 h-12 object-cover rounded">
                                @else
                                    <span class="text-gray-400">No Image</span>
                                @endif
                            </td>
                            <td class="px-4 py-2">{{ $product->name }}</td>
                            <td class="px-4 py-2">$ {{ number_format($product->price, 2) }}</td>
                            <td class="px-4 py-2">{{ str_repeat('⭐', (int)$product->rating) }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('admin.products.edit', $product->_id) }}" class="text-blue-600">Edit</a>
                                <span class="mx-1 text-gray-300">|</span>
                                <form action="{{ route('admin.products.destroy', $product->_id) }}" method="POST" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-600" onclick="return confirm('Delete this product?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </main>
    </div>
</x-app-layout>
