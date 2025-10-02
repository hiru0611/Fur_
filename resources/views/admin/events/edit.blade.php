<x-app-layout>
    <div class="flex min-h-screen bg-[#fdfaf8]">
        @include('admin.sidebar')
        
        <main class="flex-1 p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-[#5C4033]">Edit Event</h1>
                <a href="{{ route('admin.events.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
                    Back to Events
                </a>
            </div>

            <div class="bg-white shadow rounded-xl p-6">
                <form action="{{ route('admin.events.update', $event) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title *</label>
                            <input type="text" name="title" id="title" value="{{ old('title', $event->title) }}" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5C4033] focus:border-transparent">
                            @error('title')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="author" class="block text-sm font-medium text-gray-700 mb-2">Author *</label>
                            <input type="text" name="author" id="author" value="{{ old('author', $event->author) }}" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5C4033] focus:border-transparent">
                            @error('author')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="event_date" class="block text-sm font-medium text-gray-700 mb-2">Event Date *</label>
                            <input type="date" name="event_date" id="event_date" value="{{ old('event_date', $event->event_date->format('Y-m-d')) }}" required
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5C4033] focus:border-transparent">
                            @error('event_date')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                            <input type="text" name="category" id="category" value="{{ old('category', $event->category) }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5C4033] focus:border-transparent">
                            @error('category')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="md:col-span-2">
                            <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-2">Excerpt *</label>
                            <textarea name="excerpt" id="excerpt" rows="3" required
                                      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5C4033] focus:border-transparent">{{ old('excerpt', $event->excerpt) }}</textarea>
                            @error('excerpt')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="md:col-span-2">
                            <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Content</label>
                            <textarea name="content" id="content" rows="6"
                                      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5C4033] focus:border-transparent">{{ old('content', $event->content) }}</textarea>
                            @error('content')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="md:col-span-2">
                            <label for="tags" class="block text-sm font-medium text-gray-700 mb-2">Tags</label>
                            <input type="text" name="tags" id="tags" value="{{ old('tags', is_array($event->tags) ? implode(', ', $event->tags) : '') }}" placeholder="Enter tags separated by commas"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5C4033] focus:border-transparent">
                            <p class="text-sm text-gray-500 mt-1">Example: Pet Care, Training, Health</p>
                            @error('tags')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="md:col-span-2">
                            <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image</label>
                            @if($event->image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" class="h-20 w-20 object-cover rounded">
                                    <p class="text-sm text-gray-500 mt-1">Current image</p>
                                </div>
                            @endif
                            <input type="file" name="image" id="image" accept="image/*"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#5C4033] focus:border-transparent">
                            <p class="text-sm text-gray-500 mt-1">Leave empty to keep current image</p>
                            @error('image')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="md:col-span-2">
                            <label class="flex items-center">
                                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $event->is_active) ? 'checked' : '' }}
                                       class="rounded border-gray-300 text-[#5C4033] focus:ring-[#5C4033]">
                                <span class="ml-2 text-sm text-gray-700">Active</span>
                            </label>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end space-x-4">
                        <a href="{{ route('admin.events.index') }}" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition">
                            Cancel
                        </a>
                        <button type="submit" class="bg-[#5C4033] text-white px-6 py-2 rounded-lg hover:bg-[#4a3328] transition">
                            Update Event
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</x-app-layout>
