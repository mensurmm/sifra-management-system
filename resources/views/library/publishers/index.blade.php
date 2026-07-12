@extends('layouts.app')

@section('title', 'Publishers')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Publishers</h2>
                    <a href="{{ route('publishers.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">+ Add New Publisher</a>
                </div>

                @if(session('success'))
                    <div class="mb-4 rounded bg-green-100 text-green-800 px-4 py-3">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="mb-4 rounded bg-red-100 text-red-800 px-4 py-3">{{ $errors->first() }}</div>
                @endif
                
                <table class="w-full text-left border-collapse dark:text-gray-200">
                    <thead>
                        <tr class="border-b dark:border-gray-700">
                            <th class="p-2">ID</th>
                            <th class="p-2">Publisher Name</th>
                            <th class="p-2">Phone</th>
                            <th class="p-2">Email</th>
                            <th class="p-2">Status</th>
                            <th class="p-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($publishers as $publisher)
                        <tr class="border-b dark:border-gray-700">
                            <td class="p-2">{{ $publisher->id }}</td>
                            <td class="p-2">{{ $publisher->name }}</td>
                            <td class="p-2">{{ $publisher->phone ?? '-' }}</td>
                            <td class="p-2">{{ $publisher->email ?? '-' }}</td>
                            <td class="p-2">{{ $publisher->is_active ? 'Active' : 'Inactive' }}</td>
                            <td class="p-2">
                                <a href="{{ route('publishers.edit', $publisher->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('publishers.destroy', $publisher->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this publisher?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $publishers->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
