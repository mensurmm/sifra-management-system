@extends('layouts.app')

@section('title', 'Authors')

@section('content')
    <div style="padding: 40px; max-width: 1200px; margin: 0 auto; background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); margin-top: 20px;">
        
        <h2>📚 Authors Module</h2>

        <a href="{{ route('authors.create') }}">+ Add New</a>

        <hr style="margin: 20px 0;">

        @if(session('success'))
            <p style="color:green; font-weight: bold;">{{ session('success') }}</p>
        @endif

        @if($errors->any())
            <p style="color:#b91c1c; font-weight: bold;">{{ $errors->first() }}</p>
        @endif

        <table border="1" width="100%" cellpadding="10" style="border-collapse: collapse; margin-top: 15px;">
            <tr style="background-color: #f8f9fa;">
                <th>#</th>
                <th>Name</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>

            @foreach($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->is_active ? 'Active' : 'Inactive' }}</td>
                    <td>{{ $author->created_at }}</td>
                    <td>
                        <a href="{{ route('authors.edit', $author->id) }}">Edit</a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete this author?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: 0; background: none; color: #dc2626; cursor: pointer;">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <div style="margin-top: 20px;">
            {{ $authors->links() }}
        </div>

    </div>
@endsection
