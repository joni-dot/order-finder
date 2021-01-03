<x-anchors.buttons.edit :href="'/carriers/'.$item->id.'/edit'" :text="'Edit'"/>
<livewire:general.delete-model 
    :model="$item"
    :redirectRoute="route('carriers.index')"
>