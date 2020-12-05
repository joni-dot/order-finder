@extends('layouts.app')

@section('content')

    <div class="text-right">
        <a href="/carriers/create" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            @svg('add-solid', 'fill-current w-4 h-4 mr-1 ml-0 inline')
            New carrier
        </a>
    </div>
    <div class="my-4">
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="text-right pb-2 pt-2">ID</th>
                    <th class="text-right pb-2 pt-2">Name</th>
                    <th class="text-right pb-2 pt-2"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($carriers as $carrier)
                    <tr class="border-b border-t">
                        <td class="mb-2 pt-2 pb-2 text-right">{{ $carrier->id }}</td>
                        <td class="mb-2 pt-2 pb-2 text-right">{{ $carrier->name }}</td>
                        <td class="mb-2 pt-2 pb-2 text-right">
                            <a href="/carriers/{{ $carrier->id }}/edit" class="h-10 inline-block bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-2 border rounded">
                                @svg('edit-pencil', 'fill-current w-4 h-4 mr-1 ml-1 inline') 
                                <span class="mr-2">Edit</span> 
                            </a>
                            <livewire:carriers.delete-carrier :carrier="$carrier">
                        </td>
                    </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
@endsection