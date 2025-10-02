<x-guest-layout>
    <x-slot name="image">
        <img src="/images/cat1.png" alt="Happy cat with paw prints" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-48 h-48">
    </x-slot>

    <div class="w-full max-w-4xl flex shadow-lg rounded-xl overflow-hidden mt-16">
        <div class="w-1/2 bg-white flex flex-col items-center justify-center p-12 relative">
            <h1 class="text-4xl font-bold text-orange-500">Let’s Head <br>In To</h1>
            <p class="mt-4 text-sm text-gray-700">To All In One Pet Paradise</p>
            <div class="flex mt-6 space-x-2">
                <span class="text-2xl">🐾</span>
                <span class="text-2xl">🐾</span>
                <span class="text-2xl">🐾</span>
            </div>
        </div>

        <div class="w-1/2 bg-white p-12">
            <h2 class="text-2xl font-bold mb-6">Register</h2>
            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <x-label for="name" value="Name" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mb-4">
                    <x-label for="email" value="Email Address" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div class="mb-4">
                    <x-label for="password" value="Password" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mb-4">
                    <x-label for="password_confirmation" value="Confirm Password" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mb-4">
                        <label for="terms" class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />
                            <span class="ml-2 text-sm text-gray-600">
                                I agree to the <a href="{{ route('terms.show') }}" class="underline">Terms of Service</a> and <a href="{{ route('policy.show') }}" class="underline">Privacy Policy</a>
                            </span>
                        </label>
                    </div>
                @endif

                <x-button class="w-full bg-[#b97456] text-white rounded-full py-2">
                    Register
                </x-button>

                <div class="mt-4 text-center">
                    <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900">
                        Already registered?
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

