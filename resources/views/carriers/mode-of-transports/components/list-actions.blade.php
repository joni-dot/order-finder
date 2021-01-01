<x-anchors.buttons.edit 
    :href="route('carriers.mode-of-transports.edit', [
        $item->carrier->id, 
        $item->id
    ])" 
    :text="'Edit'"
/>