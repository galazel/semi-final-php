<div class="p-5 border-b-2 border-solid border-black">
    <a href="{{ route('users.show', $user->id) }}"><strong class="hover:text-blue-400">{{ $user->name }}</strong> —
        {{ $user->email }}</a>

    <div class="flex items-end">
        @isset($user->bio)
            <span style="color:green;"> | Has bio</span>
        @endisset
        @empty($user->bio)
            <span style="color:gray;"> | No bio yet</span>
        @endempty
    </div>

</div>
