@extends('layouts.app')

@section('content')

    <div class="text-right">
        <x-anchors.buttons.create :href="'/carriers/create'" :text="'New carrier'"/>
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
                            <x-anchors.buttons.edit :href="'/carriers/'.$carrier->id.'/edit'" :text="'Edit'"/>
                            <livewire:carriers.delete-carrier :carrier="$carrier">
                        </td>
                    </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
@endsection