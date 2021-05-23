<span>
    <a 
        wire:click="logOut" 
        wire:loading.remove 
        id="log-out-anchor" 
        href="#" 
        class="text-white text-m font-bold"
    >
        @svg('fast-forward', 'fill-current w-4 h-4 mr-1 ml-0 inline')
    </a>
    <a 
        wire:loading 
        wire:target="logOut"
        id="log-out-loading-icon" 
        href="" 
        class="text-white text-m font-bold"
    >
        @svg('refresh', 'animate-spin fill-current w-4 h-4 mr-1 ml-0 inline')
    </a>
</span>