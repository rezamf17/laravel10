<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Barang') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                @if ($errors->any())
                    <div class="mb-4">
                        <div class="font-medium text-red-600">Whoops! Something went wrong.</div>
                        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('items.update', $item->id) }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="item_name" class="block text-gray-700 text-sm font-bold mb-2">Nama Barang</label>
                        <input type="text" name="item_name" id="item_name" value="{{ $item->item_name }}" class="form-input rounded-md shadow-sm mt-1 block w-full" readonly>
                    </div>
                    <div class="mb-4">
                        <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Jumlah Barang</label>
                        <input type="text" name="quantity" id="quantity" value="{{ $item->quantity }}" class="form-input rounded-md shadow-sm mt-1 block w-full" readonly>
                    </div>
                    <div class="mb-4">
                        <label for="items_type" class="block text-gray-700 text-sm font-bold mb-2">Tipe Barang</label>
                        <input type="text" name="items_type" id="items_type" value="{{ $item->items_type }}" class="form-input rounded-md shadow-sm mt-1 block w-full" readonly>
                    </div>
                    <div class="mb-4">
                        <label for="item_description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                        <textarea name="item_description" id="item_description" class="form-textarea rounded-md shadow-sm mt-1 block w-full" rows="4" readonly>{{ $item->item_description }}</textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="{{ route('items.index') }}" class="text-gray-600">Cancel</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>