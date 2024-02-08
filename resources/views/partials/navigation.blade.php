<div class="py-4 text-gray-500 dark:text-gray-400">
    <a href="#" class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200">
        {{ config('app.name') }}
    </a>
    <ul class="mt-6">
        <li class="relative px-6 py-3">
            @if (request()->is('/'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600" aria-hidden="true"></span>
            @endif
            <a href="{{ url('/') }}" @class([ 'inline-flex' , 'items-center' , 'w-full' , 'text-sm' , 'font-semibold' , 'text-gray-800'=> request()->is('/'),
                'transition-colors',
                'duration-150',
                'hover:text-gray-800',
                'dark:hover:text-gray-200',
                'dark:text-gray-100' => request()->is('/'),
                ])>
                @include('components.icons.home')
                <span class="ml-4">Dashboard</span>
            </a>
        </li>
    </ul>
    <ul>
        @php
        $menus = load_menus();
        @endphp
        @foreach ($menus as $menu)
        <li class="relative px-6 py-3">
            @if (request()->is($menu['path']))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600" aria-hidden="true"></span>
            @endif
            <a href="{{ url($menu['path']) }}" @class([ 'inline-flex' , 'items-center' , 'w-full' , 'text-sm' , 'font-semibold' , 'text-gray-800'=> request()->is($menu['path']),
                'transition-colors',
                'duration-150',
                'hover:text-gray-800',
                'dark:hover:text-gray-200',
                'dark:text-gray-100' => request()->is($menu['path']),
                ])>
                @include("components.icons.{$menu['icon']}")
                <span class="ml-4">{{ $menu['name'] }}</span>
            </a>
        </li>
        @endforeach
        <li class="relative px-6 py-3">
            <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" @click="togglePagesMenu" aria-haspopup="true">
                <span class="inline-flex items-center">
                    @include('components.icons.pages')
                    <span class="ml-4">Pages</span>
                </span>
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul x-cloak x-show="isPagesMenuOpen" x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="pt-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-900" aria-label="submenu">
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                    <a href="#" class="w-full">Login</a>
                </li>
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                    <a href="#" class="w-full">Create account</a>
                </li>
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                    <a href="#" class="w-full">Forgot password</a>
                </li>
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                    <a href="#" class="w-full">404</a>
                </li>
                <li class="px-2 py-1 transition-colors duration-150 hover:text-gray:800 dark:hover:text-gray-200">
                    <a href="#" class="w-full">Blank</a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="px-6 my-6">
        <button class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Create account
            <span class="ml-2" aria-hidden="true">+</span>
        </button>
    </div>
</div>
