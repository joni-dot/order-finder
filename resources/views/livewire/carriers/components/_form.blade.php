<div class="mb-4">
    <div class="mb-2">
        <x-form.label>
            Name
        </x-form.label>
    </div>
    <div>
        <x-form.input-text
            id="name" 
            name="name"
            wire:model="name"
        />
    </div>
</div>
<x-form.input-error :name="'name'" :text="'Name'"/>
<div class="text-left">
    <button 
        class="shadow bg-purple-700 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" 
        type="submit"
    >
        Save
    </button>
</div>