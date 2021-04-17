<x-layout>
    @include('carriers.components.sub-nav', ['carrier' => $carrier])
    <div class="text-right">
        <x-anchors.buttons.create :href="route('carriers.mode-of-transports.create', $carrier->id)" :text="'New mode of transport'"/>
    </div>
    <div class="my-4">
        <livewire:carriers.mode-of-transports.carrier-mode-of-transport-listing :carrier="$carrier"/>
    </div>
</x-layout>