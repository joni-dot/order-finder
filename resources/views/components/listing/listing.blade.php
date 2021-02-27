<table class="table-auto w-full">
    <thead>
        <tr>    
            @foreach($columns as $column) 
                <th class="text-right pb-2 pt-2">
                    {{ __($itemsName.'.columns.'.$column) }}
                    <span wire:click="sortToggle('{{ $column }}')"    
                    >   
                        <span>@svg('code', 'fill-current w-4 h-4 mr-1 ml-1 inline')</span>
                    </span>
                </th>
            @endforeach
            <th class="text-right pb-2 pt-2"></th>
        </tr>
    </thead>
    <tbody>
        @forelse($items as $item)
            <tr class="border-b border-t">
                <td class="mb-2 pt-2 pb-2 text-right">{{ $item->id }}</td>
                <td class="mb-2 pt-2 pb-2 text-right">{{ $item->name }}</td>
                <td class="mb-2 pt-2 pb-2 text-right">
                    @includeIf($itemsName.'.components.list-actions')
                </td>
            </tr>
        @empty

        @endforelse
    </tbody>
</table>