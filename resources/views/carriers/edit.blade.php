<x-layout>
    @include('carriers.components.sub-nav', ['carrier' => $carrier])
    <livewire:carriers.edit-carrier :carrier="$carrier">
    <br>
    <livewire:general.comments :model="$carrier">
</x-layout>