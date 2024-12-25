<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Leagues') }}
            </h2>

            @auth
                <a
                    class="bg-blue-500 hover:bg-blue-600 dark:bg-zinc-900 dark:hover:bg-zinc-800 text-white shadow rounded text-sm px-4 py-1.5 my-auto"
                    href="{{ route('dashboard.leagues.create') }}"
                >
                    Create League
                </a>
            @endauth
        </div>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <livewire:admin.leagues.league-index-table/>
    </div>
</x-app-layout>
