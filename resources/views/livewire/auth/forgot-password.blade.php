<div class="flex p-20">
    <div class="flex-1"></div>
    <div class="flex-1 bg-indigo-300 p-5 rounded">
        <form wire:submit.prevent="sendLink">
            <div class="mb-4">
                <label class="font-bold block mb-1" for="email">Email</label>
                <input
                    id="email" 
                    class="block w-full rounded border-solid border-2 border-white" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    wire:model.defer="email"/>
                @error('email')
                    <div class="font-bold text-white mt-2 bg-red-500 p-1 pl-3 pr-3 rounded">{{  $message  }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <button wire:loading.attr="disabled" class="float-left font-bold bg-white py-1 pb-1 pr-4 pl-4 rounded">
                    <span wire:loading.remove>Email Password Reset Link</span>
                    <span wire:loading>
                        @svg('refresh', 'animate-spin fill-current w-4 h-4 mr-1 ml-0 inline')
                    </span>
                </button>
            </div>
        </form>
    </div>
    <div class="flex-1"></div>
</div>
