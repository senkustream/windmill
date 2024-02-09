@extends('layouts.app')

@section('content')
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    Tables
</h2>
@include('components.cta')

<!-- With avatar -->
<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    Table with avatars
</h4>
<div class="w-full mb-8 overflow-hidden rounded-lg ring-1 ring-black ring-opacity-5">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Client</th>
                    <th class="px-4 py-3">Amount</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Date</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @php
                    $transactions = get_transactions();
                @endphp
                @foreach ($transactions as $transaction)
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                            <!-- Avatar with inset shadow -->
                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                <img class="object-cover w-full h-full rounded-full" src="{{ $transaction['client']['picture'] }}" alt="" loading="lazy" />
                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div>
                            <div>
                                <p class="font-semibold">{{ $transaction['client']['name'] }}</p>
                                <p class="text-xs text-gray-600 dark:text-gray-400">
                                    {{ $transaction['client']['occupation'] }}
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        $ {{ $transaction['amount'] }}
                    </td>
                    <td class="px-4 py-3 text-xs">
                        @switch($transaction['status'])
                            @case('Approved')
                                @php
                                    $textColor = "text-green-700";
                                    $darkTextColor = "dark:text-green-100";
                                    $backgroundColor = "bg-green-100";
                                    $darkBackgroundColor = "dark:bg-green-700";
                                @endphp
                                @break
                            @case('Pending')
                                @php
                                    $textColor = "text-orange-700";
                                    $darkTextColor = "dark:text-white";
                                    $backgroundColor = "bg-orange-100";
                                    $darkBackgroundColor = "dark:bg-orange-600";
                                @endphp
                                @break
                            @case('Denied')
                                @php
                                    $textColor = "text-red-700";
                                    $darkTextColor = "dark:text-red-100";
                                    $backgroundColor = "bg-red-100";
                                    $darkBackgroundColor = "dark:bg-red-700";
                                @endphp
                                @break
                            @default
                                @php
                                    $textColor = "text-gray-700";
                                    $darkTextColor = "dark:text-gray-100";
                                    $backgroundColor = "bg-gray-100";
                                    $darkBackgroundColor = "dark:bg-gray-700";
                                @endphp
                        @endswitch
                        <span class="px-2 py-1 font-semibold leading-tight rounded-full {{ $textColor }} {{ $darkTextColor }} {{ $backgroundColor }} {{ $darkBackgroundColor }}">
                            {{ $transaction['status'] }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        6/10/2020
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
        <span class="flex items-center col-span-3">
            Showing 21-30 of 100
        </span>
        <span class="col-span-2"></span>
        <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
                <ul class="inline-flex items-center">
                    <li>
                        <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:ring focus:ring-purple-400" aria-label="Previous">
                            <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:ring focus:ring-purple-400">
                            1
                        </button>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:ring focus:ring-purple-400">
                            2
                        </button>
                    </li>
                    <li>
                        <button class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:ring focus:ring-purple-400">
                            3
                        </button>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:ring focus:ring-purple-400">
                            4
                        </button>
                    </li>
                    <li>
                        <span class="px-3 py-1">...</span>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:ring focus:ring-purple-400">
                            8
                        </button>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:ring focus:ring-purple-400">
                            9
                        </button>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:ring focus:ring-purple-400" aria-label="Next">
                            <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                        </button>
                    </li>
                </ul>
            </nav>
        </span>
    </div>
</div>

<!-- With actions -->
<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    Table with actions
</h4>
<div class="w-full overflow-hidden rounded-lg ring-1 ring-black ring-opacity-5">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Client</th>
                    <th class="px-4 py-3">Amount</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Date</th>
                    <th class="px-4 py-3">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @php
                    $transactions = get_transactions();
                @endphp
                @foreach ($transactions as $transaction)
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                            <!-- Avatar with inset shadow -->
                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                <img class="object-cover w-full h-full rounded-full" src="{{ $transaction['client']['picture'] }}" alt="" loading="lazy" />
                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div>
                            <div>
                                <p class="font-semibold">{{ $transaction['client']['name'] }}</p>
                                <p class="text-xs text-gray-600 dark:text-gray-400">
                                    {{ $transaction['client']['occupation'] }}
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        $ {{ $transaction['amount'] }}
                    </td>
                    <td class="px-4 py-3 text-xs">
                        @switch($transaction['status'])
                            @case('Approved')
                                @php
                                    $textColor = "text-green-700";
                                    $darkTextColor = "dark:text-green-100";
                                    $backgroundColor = "bg-green-100";
                                    $darkBackgroundColor = "dark:bg-green-700";
                                @endphp
                                @break
                            @case('Pending')
                                @php
                                    $textColor = "text-orange-700";
                                    $darkTextColor = "dark:text-white";
                                    $backgroundColor = "bg-orange-100";
                                    $darkBackgroundColor = "dark:bg-orange-600";
                                @endphp
                                @break
                            @case('Denied')
                                @php
                                    $textColor = "text-red-700";
                                    $darkTextColor = "dark:text-red-100";
                                    $backgroundColor = "bg-red-100";
                                    $darkBackgroundColor = "dark:bg-red-700";
                                @endphp
                                @break
                            @default
                                @php
                                    $textColor = "text-gray-700";
                                    $darkTextColor = "dark:text-gray-100";
                                    $backgroundColor = "bg-gray-100";
                                    $darkBackgroundColor = "dark:bg-gray-700";
                                @endphp
                        @endswitch
                        <span class="px-2 py-1 font-semibold leading-tight rounded-full {{ $textColor }} {{ $darkTextColor }} {{ $backgroundColor }} {{ $darkBackgroundColor }}">
                            {{ $transaction['status'] }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        6/10/2020
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                            <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:ring-gray" aria-label="Edit">
                                @include('icons.edit')
                            </button>
                            <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:ring-gray" aria-label="Delete">
                                @include('icons.remove')
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
        <span class="flex items-center col-span-3">
            Showing 21-30 of 100
        </span>
        <span class="col-span-2"></span>
        <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
                <ul class="inline-flex items-center">
                    <li>
                        <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:ring focus:ring-purple-400" aria-label="Previous">
                            <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:ring focus:ring-purple-400">
                            1
                        </button>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:ring focus:ring-purple-400">
                            2
                        </button>
                    </li>
                    <li>
                        <button class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:ring focus:ring-purple-400">
                            3
                        </button>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:ring focus:ring-purple-400">
                            4
                        </button>
                    </li>
                    <li>
                        <span class="px-3 py-1">...</span>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:ring focus:ring-purple-400">
                            8
                        </button>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:ring focus:ring-purple-400">
                            9
                        </button>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:ring focus:ring-purple-400" aria-label="Next">
                            <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                        </button>
                    </li>
                </ul>
            </nav>
        </span>
    </div>
</div>
@endsection
