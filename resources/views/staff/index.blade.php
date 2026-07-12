@extends('layouts.app')

@section('title', 'Staff Management')

@section('content')
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Staff Management</h1>
                    <a href="{{ route('staff.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create Staff</a>
                </div>

                @if(session('success'))
                    <div class="mb-4 rounded bg-green-100 text-green-800 px-4 py-3">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="mb-4 rounded bg-red-100 text-red-800 px-4 py-3">{{ $errors->first() }}</div>
                @endif

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse dark:text-gray-200">
                        <thead>
                            <tr class="border-b dark:border-gray-700">
                                <th class="p-3">Name</th>
                                <th class="p-3">Email</th>
                                <th class="p-3">Phone</th>
                                <th class="p-3">Role</th>
                                <th class="p-3">Status</th>
                                <th class="p-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="p-3 font-semibold">{{ $user->full_name }}</td>
                                    <td class="p-3">{{ $user->email }}</td>
                                    <td class="p-3">{{ $user->phone ?? '-' }}</td>
                                    <td class="p-3">{{ ucfirst($user->role) }}</td>
                                    <td class="p-3">{{ ucfirst($user->status) }}</td>
                                    <td class="p-3">
                                        <a href="{{ route('staff.edit', $user->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                        @if(auth()->id() !== $user->id)
                                            <form action="{{ route('staff.destroy', $user->id) }}" method="POST" class="inline" onsubmit="return confirm('Deactivate this staff member?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:underline ml-2">Deactivate</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="p-6 text-center text-gray-500">No staff members found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
