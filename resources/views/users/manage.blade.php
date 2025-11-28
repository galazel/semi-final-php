@extends('layouts.app')

@section('content')






        

{{-- 'id' => 9, 
        'name' => 'Diego Silva', 
        'email' => 'chef.diego@bistrosol.com', 
        'bio' => 'Executive Chef specializing in fusion cuisine.', 
        'contact' => '+55 21 91234-5678', 
        'role' => 'Chef' --}}

    {{-- <h1>User Profile</h1>

    <x-card>
        <x-slot name="header">
            {{ $user->name }} — Profile Information
        </x-slot>

        <img src="" alt="">

        Email: {{ $user->email }}<br>
        Status: {{ $user->active ? 'Active' : 'Inactive' }}<br>

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

    @if($user->active)
        <p style="color:green;">This user is currently active ✔️</p>
    @endif

    @unless($user->active)
        <p style="color:red;">⚠️ This user is not active!</p>
    @endunless --}}

@endsection