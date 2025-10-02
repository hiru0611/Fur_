<x-app-layout>
    <div class="flex min-h-screen bg-[#fdfaf8]">
        @include('admin.sidebar')
        
        <main class="flex-1 p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-[#5C4033]">Create New Deal</h1>
                <a href="{{ route('admin.deals.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
                    Back to Deals
                </a>
            </div>

            <div class="bg-white shadow rounded-xl p-6">
                <form action="{{ route('admin.deals.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title *</label>
                            <input type="text" name="title" id="title" value="{{ old('title') }}" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5C4033] focus:border-transparent">
                            @error('title')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                            <input type="text" name="category" id="category" value="{{ old('category') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5C4033] focus:border-transparent">
                            @error('category')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="discount" class="block text-sm font-medium text-gray-700 mb-2">Discount *</label>
                            <input type="text" name="discount" id="discount" value="{{ old('discount') }}" placeholder="e.g., 50% OFF"
                                   required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5C4033] focus:border-transparent">
                            @error('discount')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="distance" class="block text-sm font-medium text-gray-700 mb-2">Distance *</label>
                            <input type="text" name="distance" id="distance" value="{{ old('distance') }}" placeholder="e.g., 1 Mile away"
                                   required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5C4033] focus:border-transparent">
                            @error('distance')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="md:col-span-2">
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                            <textarea name="description" id="description" rows="3"
                                      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5C4033] focus:border-transparent">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="md:col-span-2">
                            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image *</label>
                            <input type="file" name="image" id="image" accept="image/*" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5C4033] focus:border-transparent">
                            @error('image')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="md:col-span-2">
                            <label class="flex items-center">
                                <input type="checkbox" name="is_active" value="1" {{ old('is_active') ? 'checked' : '' }}
                                       class="rounded border-gray-300 text-[#5C4033] focus:ring-[#5C4033]">
                                <span class="ml-2 text-sm text-gray-700">Active</span>
                            </label>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end space-x-4">
                        <a href="{{ route('admin.deals.index') }}" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition">
                            Cancel
                        </a>
                        <button type="submit" class="bg-[#5C4033] text-white px-6 py-2 rounded-lg hover:bg-[#4a3328] transition">
                            Create Deal
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</x-app-layout>
