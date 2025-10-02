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
            <h1 class="text-3xl font-bold text-[#5C4033] mb-6">Add Product</h1>

            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow rounded-xl p-6 space-y-4">
                @csrf

                <div>
                    <label class="block text-gray-700">Name</label>
                    <input type="text" name="name" class="w-full border rounded px-3 py-2" required>
                </div>

                <div>
                    <label class="block text-gray-700">Price</label>
                    <input type="number" name="price" step="0.01" class="w-full border rounded px-3 py-2" required>
                </div>

                <div>
                    <label class="block text-gray-700">Rating</label>
                    <select name="rating" class="w-full border rounded px-3 py-2" required>
                        <option value="">Select Rating</option>
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}">{{ str_repeat('⭐', $i) }}</option>
                        @endfor
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700">Category</label>
                    <select name="category_slug" class="w-full border rounded px-3 py-2" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->slug }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-gray-700">Description</label>
                    <textarea name="description" rows="5" class="w-full border rounded px-3 py-2" placeholder="Write a short description..."></textarea>
                </div>

                <div>
                    <label class="block text-gray-700">Images</label>
                    <input type="file" name="images[]" multiple class="w-full border rounded px-3 py-2">
                </div>

                <div class="flex space-x-4">
                    <button type="submit" class="bg-[#b97456] text-white px-4 py-2 rounded hover:bg-[#a56347]">Save</button>
                    <a href="{{ route('admin.products.index') }}" class="text-gray-600 px-4 py-2">Cancel</a>
                </div>
            </form>
        </main>
    </div>
</x-app-layout>
