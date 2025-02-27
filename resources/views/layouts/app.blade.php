<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="font-sans antialiased bg-contentbg-light  dark:bg-contentbg-dark text-textPrimary-light dark:text-gray-100">
    <div class="min-h-screen bg-contentbg-light dark:bg-contentbg-dark">
        @include('layouts.navigation')

        <!-- Page Heading -->
        {{-- @isset($header)
            <header class="shadow bg-contentbg-light dark:bg-contentbg-dark">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset --}}

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>


        <footer class="bg-navbg-light rounded-lg shadow dark:bg-navbg-dark m-4 mb-0">
            <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a href="https://flowbite.com/"
                        class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                        <img src="{{ asset('images/logo.png') }}" class="h-8" alt="Flowbite Logo" />
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Washmore</span>
                    </a>
                    <ul
                        class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                        <li>
                            <a href="#" class=" me-4 md:me-6">Privacy Policy</a>
                        </li>

                        <li>
                            <a href="#" class=" me-4 md:me-6">Terms and Conditions</a>
                        </li>
                    </ul>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ date('Y') }} <a
                        href="{{route('home')}}" class="">Washmore™</a>. All Rights Reserved.</span>
            </div>
        </footer>


    </div>
</body>

</html>
