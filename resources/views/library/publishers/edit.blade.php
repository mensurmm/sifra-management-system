@extends('layouts.app')

@section('title', 'Edit Publisher')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Edit Publisher</h2>
                    <a href="{{ route('publishers.index') }}" class="text-blue-600 hover:underline">Back to Publishers</a>
                </div>

                @if ($errors->any())
                    <div class="mb-4 rounded bg-red-100 text-red-800 px-4 py-3">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('publishers.update', $publisher->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Publisher Name</label>
                        <input type="text" name="name" value="{{ old('name', $publisher->name) }}" class="w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Phone</label>
                        <input type="text" name="phone" value="{{ old('phone', $publisher->phone) }}" class="w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Email</label>
                        <input type="email" name="email" value="{{ old('email', $publisher->email) }}" class="w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Address</label>
                        <textarea name="address" class="w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white">{{ old('address', $publisher->address) }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="inline-flex items-center gap-2 text-gray-700 dark:text-gray-300">
                            <input type="hidden" name="is_active" value="0">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $publisher->is_active) ? 'checked' : '' }}>
                            Active
                        </label>
                    </div>

                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Publisher</button>
                </form>
            </div>
        </div>
    </div>
@endsection
