<div>
    <form class="w-full max-w-sm" wire:submit.prevent="submit">
        @csrf
        @include('livewire.carriers.components._form')
    </form>
</div>
