@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <h1 class="text-2xl">List of Users ({{ count($users) }})</h1>


    @each('partials.user-row', $users, 'user', 'partials.no-users')


    <br>

    <x-button class="bg-green-500 p-3 rounded" onclick="alert('Refreshing...')">
        Refresh Page
    </x-button>


    @push('scripts')
        <script>
            console.log("Users page loaded");
        </script>
    @endpush
@endsection
