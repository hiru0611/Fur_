<x-app-layout>
    <div class="flex min-h-screen bg-[#fdfaf8]">
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
            <h1 class="text-3xl font-bold text-[#5C4033] mb-6">Add User</h1>

            <form action="{{ route('admin.users.store') }}" method="POST" class="bg-white shadow rounded-xl p-6 space-y-4">
                @csrf

                <div>
                    <label class="block text-gray-700">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded px-3 py-2" required>
                    @error('name') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded px-3 py-2" required>
                    @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700">Password</label>
                        <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
                        @error('password') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-gray-700">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="w-full border rounded px-3 py-2" required>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <input id="is_admin" name="is_admin" type="checkbox" value="1" {{ old('is_admin') ? 'checked' : '' }}>
                    <label for="is_admin" class="text-gray-700">Admin</label>
                </div>

                <div class="flex gap-4">
                    <button type="submit" class="bg-[#b97456] text-white px-4 py-2 rounded hover:bg-[#a56347]">Create</button>
                    <a href="{{ route('admin.users.index') }}" class="text-gray-600 px-4 py-2">Cancel</a>
                </div>
            </form>
        </main>
    </div>
</x-app-layout>


