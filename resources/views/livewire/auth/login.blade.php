<div class="flex p-20">
    <div class="flex-1"></div>
    <div class="flex-1 bg-indigo-300 p-5 rounded">
        <form wire:submit.prevent="login">
            <div class="mb-4">
                <label class="font-bold block mb-1" for="email">Email</label>
                <input
                    id="email" 
                    class="block w-full rounded border-solid border-2 border-white" 
                    type="email" 
                    name="email" 
                    :value="old('email')" 
                    wire:model="email"/>
                @error('email')
                    <div class="font-bold text-white mt-2 bg-red-500 p-1 pl-3 pr-3 rounded">{{  $message  }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="font-bold block mb-1" for="password">Password</label>
                <input 
                    id="password" 
                    class="block w-full rounded border-solid border-2 border-white"
                    type="password"
                    name="password"
                    wire:model="password"
                />
                @error('password')
                    <div class="font-bold text-white mt-2 bg-red-500 p-1 pl-3 pr-3 rounded">{{  $message  }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="font-bold" for="remember_me">
                    <input 
                        id="remember_me" 
                        type="checkbox" 
                        class="form-checkbox h-5 w-5 text-gray-600 mr-1" 
                        name="remember"
                    >
                    <span>Remember me</span>
                </label>
            </div>
            <div>
                <button class="float-left font-bold bg-white py-1 pb-1 pr-4 pl-4 rounded">
                    Log in
                </button>
                @if (Route::has('password.request'))
                    <a class="float-right font-bold" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif
            </div>
        </form>
    </div>
    <div class="flex-1"></div>
</div>
