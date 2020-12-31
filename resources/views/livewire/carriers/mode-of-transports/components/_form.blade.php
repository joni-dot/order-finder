<div class="mb-4">
    <div class="mb-2">
        <label class="block text-white font-bold md:text-left mb-1 md:mb-0 pr-4" for="name">
            Name
        </label>
    </div>
    <div>
        <input 
            class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-700" 
            id="name" 
            name="name"
            type="text"
            wire:model="name"
        >
    </div>
</div>
@error('name')
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5" role="alert">
        <strong class="font-bold">Name!</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@enderror
<div class="mb-4">
    <div class="mb-2">
        <label class="block text-white font-bold md:text-left mb-1 md:mb-0 pr-4" for="price">
            Price
        </label>
    </div>
    <div>
        <input 
            class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-700" 
            id="price" 
            name="price"
            type="text"
            wire:model="price"
        >
    </div>
</div>
@error('price')
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5" role="alert">
        <strong class="font-bold">Price!</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@enderror
<div class="mb-4">
    <div class="mb-2">
        <label class="block text-white font-bold md:text-left mb-1 md:mb-0 pr-4" for="price_vat">
            Price VAT
        </label>
    </div>
    <div>
        <input 
            class="bg-white appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-700" 
            id="price_vat" 
            name="price_vat"
            type="text"
            wire:model="price_vat"
        >
    </div>
</div>
@error('price_vat')
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5" role="alert">
        <strong class="font-bold">Price VAT!</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@enderror
<div class="text-left">
    <button 
        class="shadow bg-purple-700 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" 
        type="submit"
    >
        Save
    </button>
</div>