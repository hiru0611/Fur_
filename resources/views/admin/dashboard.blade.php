<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#fdfaf8]">

<div class="flex min-h-screen bg-[#fdfaf8]">

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

        <!-- Main content -->
        <main class="flex-1 p-8">
            <h1 class="text-3xl font-bold text-[#5C4033] mb-6">Dashboard</h1>

            <!-- Top stats row -->
            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white shadow rounded-xl p-6">
                    <h2 class="text-sm text-gray-500">Total Earnings</h2>
                    <p class="text-2xl font-bold text-[#5C4033] mt-2">$561.23</p>
                    <div class="mt-4 h-24 bg-[#d9b99b]/30 rounded-lg"></div>
                </div>

                <div class="bg-white shadow rounded-xl p-6">
                    <h2 class="text-sm text-gray-500">Total Sales</h2>
                    <p class="text-2xl font-bold text-[#5C4033] mt-2">235</p>
                    <div class="mt-4 h-24 bg-[#d9b99b]/30 rounded-lg"></div>
                </div>

                <div class="bg-white shadow rounded-xl p-6">
                    <h2 class="text-sm text-gray-500">Payout</h2>
                    <p class="text-2xl font-bold text-[#5C4033] mt-2">$1201.12</p>
                    <div class="mt-4 h-24 bg-[#d9b99b]/30 rounded-lg"></div>
                </div>
            </div>

            <!-- Bottom row -->
            <div class="grid grid-cols-2 gap-6 mt-8">
                <div class="bg-white shadow rounded-xl p-6">
                    <h2 class="text-lg font-semibold text-[#5C4033] mb-4">Last Orders</h2>
                    @livewire('admin.orders-table')
                </div>

                <div class="bg-white shadow rounded-xl p-6">
                    <h2 class="text-lg font-semibold text-[#5C4033] mb-4">Best Sellers</h2>
                    <ul class="space-y-2 text-sm">
                        <li class="flex justify-between">
                            <span>Business WP Theme</span>
                            <span class="font-bold">$49</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Digital WP Theme</span>
                            <span class="font-bold">$100</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Core Woo Plugins</span>
                            <span class="font-bold">$60</span>
                        </li>
                    </ul>
                </div>
            </div>
        </main>

        <!-- Right sidebar -->
        <aside class="w-72 bg-[#f5ede6] border-l border-[#e2d4c5] p-6 flex flex-col justify-between">
            <div>
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-full bg-[#d9b99b]"></div>
                    <div>
                        <h3 class="font-semibold text-[#5C4033]">Admin User</h3>
                        <p class="text-sm text-gray-500">Master Admin</p>
                    </div>
                </div>

                <div class="bg-white shadow rounded-xl p-4 mb-4">
                    <h4 class="text-sm text-gray-500">Total Earnings</h4>
                    <p class="text-lg font-bold text-[#5C4033]">$1253.18</p>
                </div>

                <div class="bg-white shadow rounded-xl p-4 mb-4">
                    <h4 class="text-sm text-gray-500">Payment Fee</h4>
                    <p class="text-lg font-bold text-[#5C4033]">$51.12</p>
                </div>

                <div class="bg-[#5C4033] text-white shadow rounded-xl p-4">
                    <h4 class="text-sm">Total Payout</h4>
                    <p class="text-lg font-bold">$1201.12</p>
                </div>
            </div>

            <div class="mt-6">
                <div class="bg-[#d9b99b] text-[#5C4033] rounded-xl p-4 shadow">
                    <h4 class="font-semibold">Help Center</h4>
                    <p class="text-sm">We’re always ready to support you.</p>
                </div>
            </div>
        </aside>
    </div>

</body>
</html>

