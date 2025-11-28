<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
             /*! tailwindcss v4.0.7 | MIT License ... (Your existing CSS) */
             @layer theme{...} @layer base{...} @layer components; @layer utilities{...}
        </style>
    @endif
</head>
<body class="m-0 h-screen flex w-full overflow-hidden bg-gray-100 font-sans">

    <aside class="w-[20vw] min-w-[250px] bg-white border-r border-gray-200 flex-shrink-0 flex flex-col h-full">
        @section('sidebar')
            <div class="p-6 border-b border-gray-100">
                <h3 class="text-xl font-bold text-gray-800">Profile System</h3>
            </div>
            
            <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-2">
                <a href="{{ route('users.index') }}" class="block px-4 py-3 rounded-lg text-gray-600 hover:bg-amber-100 hover:text-amber-700 transition-colors font-medium">
                    View All Users
                </a>
                
                <a href="{{ route('users.manage') }}" class="block px-4 py-3 rounded-lg text-gray-600 hover:bg-amber-100 hover:text-amber-700 transition-colors font-medium">
                    Manage Users
                </a>
            </nav>
            
            <div class="p-4 border-t border-gray-100 text-sm text-gray-400">
                &copy; 2025 App
            </div>
        @show
    </aside>

    <main class="flex-1 flex flex-col h-full overflow-y-auto bg-gray-50 relative">
        <div class="p-8 w-full max-w-7xl mx-auto">
             @yield('content')
        </div>
    </main>

    @stack('scripts')
</body>

</html>