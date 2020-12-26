<ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
    @foreach($items as $item)    
        <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
            <a href="{{ route($item['route'], $item['parameters']) }}" class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal {{ \Route::current()->getName() == $item['route'] ? 'bg-pink-600 text-white' : 'text-pink-600' }}">
                {{ $item['text'] }}
            </a>
        </li>
    @endforeach
</ul>