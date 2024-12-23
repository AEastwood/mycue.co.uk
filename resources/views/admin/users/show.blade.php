<x-admin-layout>
    <div class="flex gap-4 font-bold mb-4">
        <div class="flex gap-4 w-full lg:w-1/2">
            <img
                class="w-10"
                src="{{ $user->profile_photo_url }}"
                alt="{{ $user->name }}'s Profile Picture"
            >
            <div class="my-auto text-2xl">{{ $user->name }}</div>
        </div>

        <div class="flex gap-4 w-full lg:w-1/2 justify-end">
            <div>
                <button class="rounded px-4 py-1.5 text-sm bg-zinc-800 text-white shadow">
                    button
                </button>
            </div>
        </div>
    </div>

    @json($user)
</x-admin-layout>
