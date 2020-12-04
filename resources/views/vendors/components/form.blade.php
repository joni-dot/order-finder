<div class="md:flex md:items-center mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-full-name">
        Name
    </label>
  </div>
  <div class="md:w-2/3">
    <input 
        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
        id="name" 
        name="name"
        type="text"
        value="{{ $vendor->name }}"
    >
  </div>
</div>
@error('name')
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5" role="alert">
        <strong class="font-bold">Name!</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@enderror
<div class="md:flex md:items-center mb-6">
  <div class="md:w-1/3">
    <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-full-name">
        WWW
    </label>
  </div>
  <div class="md:w-2/3">
    <input 
        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
        id="www" 
        name="www"
        type="text"
        value="{{ $vendor->www }}"
    >
  </div>
</div>
@error('www')
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5" role="alert">
        <strong class="font-bold">WWW!</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@enderror
<div class="md:flex md:items-center">
  <div class="md:w-1/3"></div>
  <div class="md:w-2/3 md:text-right">
    <button 
        class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" 
        type="submit"
    >
        Save
    </button>
  </div>
</div>