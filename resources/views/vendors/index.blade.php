<x-layout>
    <div class="text-right">
        <a href="/vendors/create" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            New vendor
        </a>
    </div>
    <div class="my-4">
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="text-right">ID</th>
                    <th class="text-right">Name</th>
                    <th class="text-right"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($vendors as $vendor)
                    <tr>
                        <td class="mb-2 pt-2 pb-2 text-right">{{ $vendor->id }}</td>
                        <td class="mb-2 pt-2 pb-2 text-right">{{ $vendor->name }}</td>
                        <td class="mb-2 pt-2 pb-2 text-right">
                            <a href="/vendors/{{ $vendor->id }}/edit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-1 border border-yellow-700 rounded">
                                Edit
                            </a>
                        </td>
                    </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
</x-layout>