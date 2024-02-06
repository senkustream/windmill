@extends('layouts.app')

@section('content')
<div class="flex h-screen bg-gray-50 dark:bg-gray-900">
    @include('partials.sidebar')
    <div class="flex flex-col flex-1 w-full">
        @include('partials.header')
    </div>
</div>
@endsection