<x-layout>
    @include('carriers.components.sub-nav', ['carrier' => $carrier])
    <livewire:carriers.edit-carrier :carrier="$carrier">
</x-layout>