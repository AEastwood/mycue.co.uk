<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
<livewire:toasts/>
@livewire('wire-elements-modal')

<div class="flex flex-col">

    <div class="flex flex-col md:flex-row min-h-screen bg-primary">
        <!-- Sidebar -->
        <livewire:admin.admin-sidebar/>

        <!-- Page Content -->
        <main class="flex flex-col bg-gray-100 w-full h-screen overflow-y-scroll">
            @impersonating
            <div class="bg-red-100 text-red-700 p-4 text-center" role="alert">
                <p>
                    You are currently impersonating {{ Auth::user()?->name }},
                    <a
                        class="font-bold underline"
                        href="{{ route('impersonate.leave') }}"
                        title="Stop Impersonating"
                    >
                        stop impersonating
                    </a>
                </p>
            </div>
            @endImpersonating

            <div class="w-full p-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</div>

@stack('modals')

@livewireScripts
</body>
</html>