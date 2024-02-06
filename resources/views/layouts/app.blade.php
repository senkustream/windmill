<!DOCTYPE html>
<html lang="en" x-data="data" :class="{ 'dark': dark }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    </style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('init-alpine.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900">
        @include('partials.sidebar')
        <div class="flex flex-col flex-1 w-full">
            @include('partials.header')
            <main class="w-full overflow-auto">
                <div class="container px-6 mx-auto-grid">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    @yield('before-body')
</body>
</html>