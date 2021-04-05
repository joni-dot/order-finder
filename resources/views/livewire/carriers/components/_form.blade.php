<div class="mb-4">
    <div class="mb-2">
        <x-form.label>
            Name
        </x-form.label>
    </div>
    <div>
        <input 
            class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-700" 
            id="name" 
            name="name"
            type="text"
            wire:model="name"
        >
    </div>
</div>
@error('name')
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5" role="alert">
        <strong class="font-bold">Name!</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@enderror
<div class="text-left">
    <button 
        class="shadow bg-purple-700 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" 
        type="submit"
    >
        Save
    </button>
</div>