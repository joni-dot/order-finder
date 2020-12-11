<table class="table-auto w-full">
    <thead>
        <tr>
            <th class="text-right pb-2 pt-2">ID</th>
            <th class="text-right pb-2 pt-2">Name</th>
            <th class="text-right pb-2 pt-2"></th>
        </tr>
    </thead>
    <tbody>
        @forelse($items as $item)
            <tr class="border-b border-t">
                <td class="mb-2 pt-2 pb-2 text-right">{{ $item->id }}</td>
                <td class="mb-2 pt-2 pb-2 text-right">{{ $item->name }}</td>
                <td class="mb-2 pt-2 pb-2 text-right">
                    <x-anchors.buttons.edit :href="'/carriers/'.$item->id.'/edit'" :text="'Edit'"/>
                    <livewire:carriers.delete-carrier :carrier="$item">
                </td>
            </tr>
        @empty

        @endforelse
    </tbody>
</table>