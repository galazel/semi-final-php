@php
    $colors = [
        'success' => 'green',
        'danger' => 'red',
        'info' => 'blue',
        'warning' => 'orange'
    ];
@endphp

<div style="
    padding:10px;
    margin:8px 0;
    border: 1px solid {{ $colors[$type] ?? 'black' }};
    color: {{ $colors[$type] ?? 'black' }};
">
    <strong>{{ $message }}</strong>
    <div>{{ $slot }}</div>
</div>
