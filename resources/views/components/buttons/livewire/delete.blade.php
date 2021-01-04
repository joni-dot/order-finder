@if($confirm)
    <button wire:click="delete()" class="h-10 bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border rounded">
        @svg('trash', 'fill-current w-4 h-4 mr-1 ml-1 inline')
        <span class="mr-2">Sure?</span>
    </button>
@else
    <button wire:click="showConfirm()" class="h-10 bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border rounded">
        @svg('trash', 'fill-current w-4 h-4 mr-1 ml-1 inline')
        <span class="mr-2">Delete</span>
    </button>
@endif