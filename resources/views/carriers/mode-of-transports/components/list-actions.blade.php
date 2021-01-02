<x-anchors.buttons.edit 
    :href="route('carriers.mode-of-transports.edit', [
        $item->carrier->id, 
        $item->id
    ])" 
    :text="'Edit'"
/>
<livewire:carriers.mode-of-transports.delete-carrier-mode-of-transport
    :carrier="$item->carrier"
    :mode-of-transport="$item"
>