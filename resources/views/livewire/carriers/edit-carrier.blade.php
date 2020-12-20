<div class="bg-teal-500 p-5 rounded">
    <form class="w-full" wire:submit.prevent="submit">
        @csrf
        @method('patch')
        @include('livewire.carriers.components._form')
    </form>
</div>
