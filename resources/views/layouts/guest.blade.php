<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body class="bg-[#F8F3F1] font-sans text-gray-900 antialiased flex flex-col min-h-screen">
    <div class="bg-[#593d2e] h-[200px] w-full flex justify-center items-end relative">
        {{-- The image slot will be injected here --}}
        {{ $image }}
    </div>
    
    <div class="flex-grow flex items-center justify-center -mt-[100px] z-10">
        {{ $slot }}
    </div>

    {{-- Divider line between content and footer --}}
    <div class="h-px w-full bg-gray-300"></div>

    <div class="w-full h-[80px] bg-[#F8F3F1] flex justify-center items-center">
        <div class="flex flex-col text-xs text-gray-500 items-center justify-center">
            <div class="flex items-center space-x-2 mb-2">
                <p>Copyright © 2022 © Jisu.All rights reserved</p>
                <div class="flex space-x-2">
                    <img src="https://via.placeholder.com/30x20?text=VISA" alt="Visa">
                    <img src="https://via.placeholder.com/30x20?text=Mastercard" alt="Mastercard">
                    <img src="https://via.placeholder.com/30x20?text=PayPal" alt="PayPal">
                    <img src="https://via.placeholder.com/30x20?text=Amex" alt="Amex">
                </div>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="hover:underline">Privacy & Cookie Policy</a>
                <a href="#" class="hover:underline">Terms of Service</a>
            </div>
        </div>
    </div>

    @livewireScripts
</body>
</html>