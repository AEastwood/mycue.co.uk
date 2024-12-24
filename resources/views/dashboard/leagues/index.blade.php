<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leagues') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="flex justify-between">
            <div>left</div>

            <a
                class="bg-white hover:bg-gray-50 dark:bg-zinc-900 dark:hover:bg-zinc-800 dark:text-white shadow rounded text-sm px-4 py-1.5"
                href="{{ route('dashboard.leagues.create') }}"
            >
                Create League
            </a>
        </div>
    </div>
</x-app-layout>
