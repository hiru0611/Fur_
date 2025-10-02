<div wire:poll.5s>
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-lg font-semibold text-[#5C4033]">Recent Users</h2>
        <input type="text" wire:model.debounce.300ms="search" placeholder="Search..." class="border rounded px-2 py-1" />
    </div>

    <div class="bg-white shadow rounded-xl overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-gray-600">
                <tr>
                    <th class="text-left p-3">ID</th>
                    <th class="text-left p-3">Name</th>
                    <th class="text-left p-3">Email</th>
                    <th class="text-left p-3">Joined</th>
                    <th class="text-left p-3">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach($users as $user)
                    <tr>
                        <td class="p-3">{{ $user->id }}</td>
                        <td class="p-3">{{ $user->name }}</td>
                        <td class="p-3">{{ $user->email }}</td>
                        <td class="p-3">{{ $user->created_at }}</td>
                        <td class="p-3">
                            <a href="{{ route('admin.users.edit', $user) }}" class="text-blue-600 hover:underline mr-3">Edit</a>
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline" onsubmit="return confirm('Delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


