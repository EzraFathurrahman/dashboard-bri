<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased ">
        <x-jet-banner />

        <div class="bg-gray-100 ">
                <div class="flex ">
                    <x-sidebar-menu class="w-64" />
                    <div class="bg-white h-full shadow w-full x-auto py-6 px-6 sm:px-6 lg:px-8 ">
                        {{ $header }}
                        {{ $slot }}
                    </div>
                </div>
        </div>
        @stack('modals')
        @stack('custom-scripts')

        @livewireScripts
    </body>
</html>
