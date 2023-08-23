<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @keyframes floatIn {
            0% {
                transform: translate(-50%, -40%);
                opacity: 0;
            }
            100% {
                transform: translate(-50%, 0);
                opacity: 1;
            }
        }

        @keyframes floatOut {
            0% {
                transform: translate(-50%, 0);
                opacity: 1;
            }
            100% {
                transform: translate(-50%, -40%);
                opacity: 0;
            }
        }
    </style>
</head>

<body class="font-sans antialiased">
    @if (session()->has('status'))
    
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed bg-purple-500 text-white py-4 px-8 rounded-full top-4 left-1/2 transform -translate-x-1/2 text-sm"
            style="animation: floatIn 0.5s ease-in-out forwards;">
            <p>{{ session('status') }}</p>
        </div>
    @endif
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
