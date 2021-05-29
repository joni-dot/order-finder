<x-anchors.buttons.edit 
    :href="route('dashboard.carriers.mode-of-transports.edit', [
        $item->carrier->id, 
        $item->id
    ])" 
    :text="'Edit'"
/>
<livewire:general.delete-model 
    :model="$item"
    :redirectRoute="route('dashboard.carriers.mode-of-transports.index', [$item->carrier->id, $item->id])"
>