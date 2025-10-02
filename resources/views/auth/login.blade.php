<x-guest-layout>
    <x-slot name="image">
        <img src="/images/sleepy-cat.png" alt="Black cat with paw prints" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-48 h-48">
    </x-slot>

    <div class="w-full max-w-4xl flex shadow-lg rounded-xl overflow-hidden mt-16">
        <div class="w-1/2 bg-white flex flex-col items-center justify-center p-12 relative">
            <div class="text-center md:text-left">
                <h1 class="text-4xl font-bold text-[#FF914D] mb-4">
                    Welcome<br>
                    <span class="relative">
                        Back!
                    </span>
                </h1>
                <p class="text-black">To All In One Pet Paradise</p>
            </div>
            <div class="flex mt-6 space-x-2">
                <span class="text-2xl">🐾</span>
                <span class="text-2xl">🐾</span>
                <span class="text-2xl">🐾</span>
            </div>
        </div>

        <div class="w-1/2 bg-white p-12">
            <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
            <x-validation-errors class="mb-4" />
            @session('status')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ $value }}
                </div>
            @endsession

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <x-label for="email" value="{{ __('Username or email address *') }}" class="block mb-2 text-sm font-medium" />
                    <x-input id="email" class="block w-full px-4 py-2 border rounded-md focus:border-gray-500 focus:ring focus:ring-gray-200" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your username or email" />
                </div>

                <div class="mb-4">
                    <x-label for="password" value="{{ __('Password *') }}" class="block mb-2 text-sm font-medium" />
                    <x-input id="password" class="block w-full px-4 py-2 border rounded-md focus:border-gray-500 focus:ring focus:ring-gray-200" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password" />
                </div>

                <div class="flex justify-between items-center mb-6 text-sm">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="w-full px-4 py-2 text-white bg-[#b97456] rounded-full hover:bg-[#a3694f] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#b97456]">
                        Log In
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>