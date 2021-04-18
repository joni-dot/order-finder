<x-layout>
    @include('carriers.components.sub-nav', ['carrier' => $carrier])
    <div class="h-100 w-full flex bg-teal-lightest shadow">
        <div class="bg-white rounded shadow w-full p-6">
            <div class="w-full">
                <h1 class="text-grey-darkest font-bold text-lg">Mode of transports</h1>
                <div class="w-full mt-4 mb-4 text-right">
                    <x-anchors.buttons.create :href="route('carriers.mode-of-transports.create', $carrier->slug)" :text="'New mode of transport'"/>
                </div>  
            </div>
            <div>
                <livewire:carriers.mode-of-transports.carrier-mode-of-transport-listing :carrier="$carrier"/>
            </div>
        </div>
    </div>
</x-layout>