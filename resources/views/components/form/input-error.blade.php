@error($name)
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5" role="alert">
        <strong class="font-bold">{{ $text }}!</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@enderror