<x-anchors.buttons.edit :href="'/carriers/'.$item->slug.'/edit'" :text="'Edit'"/>
<livewire:general.delete-model 
    :model="$item"
    :redirectRoute="route('carriers.index')"
    :key="$item->id"
>