<div class="w-full overflow-hidden rounded-lg ring-1 ring-black ring-opacity-5">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-nowrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Client</th>
                    <th class="px-4 py-3">Amount</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Date</th>
                    @isset($actions_column)
                        @if($actions_column)
                            <th class="px-4 py-3">Actions</th>
                        @endif
                    @endisset
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @php
                    $transactions = windmill_get_transactions();
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
                    @php
                            switch($transaction['status']) {
                                case 'Approved':
                                    $class = "text-green-700 bg-green-100 dark:text-green-100 dark:bg-green-700";
                                break;
                                case 'Pending':
                                    $class = "text-orange-700 bg-orange-100 dark:text-white dark:bg-orange-600";
                                break;
                                case 'Denied':
                                    $class = "text-red-700 bg-red-100 dark:text-red-100 dark:bg-red-700";
                                break;
                                default:
                                    $class = "text-gray-700 bg-gray-100 dark:text-gray-100 dark:bg-gray-700";
                            }
                        @endphp
                        <span class="px-2 py-1 font-semibold leading-tight rounded-full {{ $class }}">
                            {{ $transaction['status'] }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        6/10/2020
                    </td>
                    @isset($actions_column)
                        @if($actions_column)
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
                        @endif
                    @endisset
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('components.pagination')
</div>
