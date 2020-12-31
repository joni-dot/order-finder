<div class="bg-teal-500 p-5 rounded">
    <form class="w-full" wire:submit.prevent="submit">
        @csrf
        @include('livewire.carriers.mode-of-transports.components._form')
    </form>
</div>
