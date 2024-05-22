<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Sukses!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
								<x-nav-link :href="route('items.create')" class="py-3 px-4 text-indigo-700" :active="request()->routeIs('items.create')">
                                {{ __('Add Items') }}
								</x-nav-link>
			<table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($items as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->item_name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->item_description }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('items.show', $item->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                <a href="{{ route('items.edit', $item->id) }}" class="ml-4 text-indigo-600 hover:text-indigo-900">Edit</a>
                                <form id="deleteForm-{{ $item->id }}" action="{{ route('items.destroy', $item->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="deleteButton ml-4 text-red-600 hover:text-red-900">Delete</button>
                                </form>            
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
        $('.deleteButton').on('click', function(){
            var formId = $(this).closest('form').attr('id'); // Dapatkan ID form yang terkait
            var itemId = formId.split('-')[1]; // Dapatkan ID item dari ID form
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#' + formId).submit(); // Kirim form jika pengguna mengkonfirmasi
                }
            });
        });
    });
    </script>
</x-app-layout>