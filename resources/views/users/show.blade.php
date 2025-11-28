@extends('layouts.app')

@section('title', "Profile - $user->name")

@section('content')
    <h1 class="text-center text-4xl font-bold">Student Profile</h1>

    <x-card>

        <img src="{{ $user->image }}" alt="">
        <x-slot name="header">
            {{ $user->name }}
        </x-slot>

        Role: {{ $user->role }}<br>
        Email: {{ $user->email }}<br>
        Status: {{ $user->active ? 'Active' : 'Inactive' }}<br>
        Contact: {{ $user->contact }}<br>

        @isset($user->bio)
            <p>Bio: {{ $user->bio }}</p>
        @endisset

        @empty($user->bio)
            <p style="color:gray;">No bio provided.</p>
        @endempty
    </x-card>

    @php
        $componentType = $user->active ? 'alert' : 'button';
    @endphp

    <x-dynamic-component :component="$componentType" type="info" message="Status Message">
        {{ $user->name }} is {{ $user->active ? 'active' : 'inactive' }}.
    </x-dynamic-component>

    @if ($user->active)
        <p style="color:green;">This user is currently active ✔️</p>
    @endif

    @unless ($user->active)
        <p style="color:red;">⚠️ This user is not active!</p>
    @endunless

@endsection
