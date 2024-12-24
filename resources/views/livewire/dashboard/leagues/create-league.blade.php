<div class="space-y-6 max-w-full mx-auto p-6 bg-white shadow-md rounded">
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">
            Name
        </label>
        <input
            type="text"
            name="name"
            id="name"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            required
            wire:model.live="form.name"
        />
        @error('form.name')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="game" class="block text-sm font-medium text-gray-700">
            Game
        </label>
        <select
            type="text"
            name="game"
            id="game"
            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            required
            wire:model.live="form.game"
        >
            <option value="">Please Select</option>
            <option value="pool_blackball">Pool (Blackball)</option>
            <option value="snooker">Snooker</option>
        </select>
        @error('form.game')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div class="pt-4">
        <button
            type="button"
            class="w-full px-4 py-2 text-white bg-indigo-600 rounded-md shadow hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
            wire:click="save"
        >
            Create League
        </button>
    </div>
</div>
