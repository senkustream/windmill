@extends('layouts.app')

@section('content')
<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Forms</h2>
    @include('components.cta')
    <!-- General elements -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">Elements</h4>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Name</span>
            <input type="text" class="block rounded w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-400 dark:text-gray-300 dark:focus:outline-none dark:focus:ring dark:focus:ring-gray-100 form-input" placeholder="Jane Done">
        </label>

        <div class="mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Account Type</span>
            <div class="mt-2">
                <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                    <input type="radio" name="accountType" value="personal" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-400 dark:focus:outline-none dark:focus:ring dark:focus:ring-gray-100" />
                    <span class="ml-2">Personal</span>
                </label>
                <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                    <input type="radio" name="accountType" value="business" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-400 dark:focus:outline-none dark:focus:ring dark:focus:ring-gray-100" />
                    <span class="ml-2">Business</span>
                </label>
            </div>
        </div>

        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Requested Limit</span>
            <select class="block rounded w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-400 dark:focus:outline-none dark:focus:ring dark:focus:ring-gray-100">
                <option value="1000">$1,000</option>
                <option value="5000">$5,000</option>
                <option value="10000">$10,000</option>
                <option value="25000">$25,000</option>
            </select>
        </label>

        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Multiselect</span>
            <select multiple class="block rounded w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-400 dark:focus:outline-none dark:focus:ring dark:focus:ring-gray-100">
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
                <option value="5">Option 5</option>
            </select>
        </label>

        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Message</span>
            <textarea placeholder="Enter some long form content." rows="3" class="block rounded w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-400 dark:focus:outline-none dark:focus:ring dark:focus:ring-gray-100"></textarea>
        </label>

        <div class="flex mt-6 text-sm">
            <label class="flex items-center dark:text-gray-400">
                <input type="checkbox" class="rounded text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-400 dark:focus:outline-none dark:focus:ring dark:focus:ring-gray-100" />
                <span class="ml-2">I agree to the <span class="underline">privacy policy</span></span>
            </label>
        </div>
    </div>

    <!-- Validation inputs -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">Validation</h4>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <!-- Invalid input -->
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Invalid input</span>
            <input class="block rounded w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:ring-red-400 form-input" placeholder="Please enter password" type="password" value="Abc123">
            <span class="text-xs text-red-600 dark:text-red-400">Your password is too short.</span>
        </label>

        <!-- Valid input -->
        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Valid input</span>
            <input class="block rounded w-full mt-1 text-sm border-green-600 dark:text-gray-300 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:ring-green-400 form-input" placeholder="Please enter password" type="password" value="Abc1234567890" />
            <span class="text-xs text-green-600 dark:text-green-400">Your password is strong</span>
        </label>

        <!-- Helper text -->
        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Helper text</span>
            <input class="block rounded w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-400 dark:focus:outline-none dark:focus:ring dark:focus:ring-gray-100 form-input" placeholder="Please enter password" type="password" />
            <span class="text-xs text-gray-600 dark:text-gray-400">Your password must be at least 6 characters long.</span>
        </label>
    </div>

    <!-- Input with icons -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">Icons</h4>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Icon left</span>
            <!-- focus-within sets the color for the icon when input is focused -->
            <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                <input class="block rounded w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-400 dark:focus:outline-none dark:focus:ring dark:focus:ring-gray-100 form-input" type="email" placeholder="janedoe@example.com" />
                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </label>

        <label class="block-mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Icon right</span>
            <!-- focus-within sets the color for the icon when input is focused -->
            <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                <input class="block rounded w-full pr-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple 400 focus:outline-none focus:ring focus:ring-purple-400 dark:focus:outline-none dark:focus:ring dark:focus:ring-gray-100 form-input" type="email" placeholder="janedoe@example.com" />
                <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </label>
    </div>

    <!-- Input with buttons -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">Buttons</h4>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Button left</span>
            <div class="relative">
                <input class="block rounded w-full pl-20 mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-400 dark:focus:outline-none dark:focus:ring dark:focus:ring-gray-100 form-input" placeholder="Jane Doe" />
                <button class="absolute inset-y-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-l-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring focus:ring-purple-400 dark:focus:outline-none dark:focus:ring dark:focus:ring-gray-100">
                    Click
                </button>
            </div>
        </label>

        <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Button right</span>
            <div class="relative text-gray-500 focus-within:text-purple-600">
                <input class="block rounded w-full pr-20 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-400 dark:focus:outline-none dark:focus:ring dark:focus:ring-gray-100 form-input" placeholder="Jane Doe" />
                <button class="absolute inset-y-0 right-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-r-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring focus:ring-purple-400">
                    Click
                </button>
            </div>
        </label>
    </div>
</div>
@endsection
