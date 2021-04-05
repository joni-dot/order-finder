<x-layout>
    <div class="text-right">
        <x-anchors.buttons.create :href="'/carriers/create'" :text="'New carrier'"/>
    </div>
    <div class="my-4">
        <livewire:carriers.carrier-listing />
    </div>
</x-layout>