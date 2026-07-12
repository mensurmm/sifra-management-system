@extends('layouts.app')

@section('title', 'Edit Author')

@section('content')
    <div style="padding: 40px; max-width: 600px; margin: 0 auto; background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); margin-top: 20px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h2 style="margin: 0;">Edit Author</h2>
            <a href="{{ route('authors.index') }}" style="text-decoration: none; color: #555;">Back to List</a>
        </div>

        @if ($errors->any())
            <div style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('authors.update', $author->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 20px;">
                <label for="name" style="display: block; font-weight: bold; margin-bottom: 8px;">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $author->name) }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="biography" style="display: block; font-weight: bold; margin-bottom: 8px;">Biography:</label>
                <textarea id="biography" name="biography" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">{{ old('biography', $author->biography) }}</textarea>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: flex; gap: 8px; align-items: center;">
                    <input type="hidden" name="is_active" value="0">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', $author->is_active) ? 'checked' : '' }}>
                    Active
                </label>
            </div>

            <button type="submit" style="background-color: #4CAF50; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">
                Update Author
            </button>
        </form>
    </div>
@endsection
