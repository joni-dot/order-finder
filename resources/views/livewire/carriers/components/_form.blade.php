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
    <x-form.button-submit/>
</div>