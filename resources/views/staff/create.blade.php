@extends('layouts.app')

@section('title', 'Create Staff')

@section('content')
    <div class="py-10">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Create Staff Member</h1>
                    <a href="{{ route('staff.index') }}" class="text-blue-600 hover:underline">Back to Staff</a>
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

                <form action="{{ route('staff.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block text-gray-700 dark:text-gray-300">Full Name</label>
                        <input type="text" name="full_name" value="{{ old('full_name') }}" class="w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 dark:text-gray-300">Email Address</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 dark:text-gray-300">Phone Number</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" class="w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white">
                    </div>

                    <div>
                        <label class="block text-gray-700 dark:text-gray-300">Password</label>
                        <input type="password" name="password" class="w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white" required>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300">Role</label>
                            <select name="role" class="w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white">
                                <option value="manager" {{ old('role') === 'manager' ? 'selected' : '' }}>Manager</option>
                                <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-gray-700 dark:text-gray-300">Status</label>
                            <select name="status" class="w-full rounded border-gray-300 dark:bg-gray-700 dark:text-white">
                                <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save Staff Member</button>
                </form>
            </div>
        </div>
    </div>
@endsection
