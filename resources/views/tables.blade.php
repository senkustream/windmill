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
@include('components.table')

<!-- With actions -->
<h4 class="mt-8 mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    Table with actions
</h4>
@include('components.table', ['actions_column' => true])
@endsection
