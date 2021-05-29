<x-anchors.buttons.edit :href="route('dashboard.carriers.edit', $item->slug)" :text="'Edit'"/>
<livewire:general.delete-model 
    :model="$item"
    :redirectRoute="route('dashboard.carriers.index')"
    :key="$item->id"
>