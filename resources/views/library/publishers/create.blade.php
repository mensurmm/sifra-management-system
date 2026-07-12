@extends('layouts.app')

@section('title', 'Add New Publisher')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-200">Add New Publisher</h2>
                
                <form action="{{ route('publishers.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Publisher Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Phone</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" class="w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Address</label>
                        <textarea name="address" class="w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white">{{ old('address') }}</textarea>
                    </div>
                    <input type="hidden" name="is_active" value="1">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save Publisher</button>
                </form>
            </div>
        </div>
    </div>
@endsection
