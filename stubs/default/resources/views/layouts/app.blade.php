<!DOCTYPE html>
<html lang="en" x-data="data" :class="{ 'dark': dark }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    </style>
    @vite('resources/css/app.css')
    @stack('styles')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('init-alpine.js') }}"></script>
    @stack('scripts.head')
</head>
<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('partials.sidebar')
        <div class="flex flex-col flex-1 w-full">
            @include('partials.header')
            <main class="h-full overflow-y-auto">
                @yield('content')
            </main>
        </div>
    </div>
    @yield('content.hidden')
    @stack('scripts.body')
</body>
</html>
