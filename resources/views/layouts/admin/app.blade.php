<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Admin-' . config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('dist/css/app-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/prism.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('dist/js/app-admin.js') }}" defer></script>
    <script src="{{ asset('js/prism.js') }}" defer></script>
</head>

<body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
    @include('layouts.admin.mobileMenu')
    <div class="flex overflow-hidden">
        @include('layouts.admin.navigation')
        <!-- BEGIN: Content -->
        <div class="content">
            @include('layouts.admin.topBar')
            <div class="report-box-3 report-box-3--content grid grid-cols-12 gap-6 xl:-mt-5 2xl:-mt-8 -mb-10 z-40 2xl:z-10">
                {{ $slot }}
            </div>
        </div>
        <!-- END: Content -->
    </div>

    {{-- <!-- BEGIN: Dark Mode Switcher-->
    <div data-url="side-menu-dark-dashboard-overview-1.html"
        class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
        <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
        <div class="dark-mode-switcher__toggle border"></div>
    </div>
    <!-- END: Dark Mode Switcher--> --}}
</body>

</html>
