@extends('layouts.app')

@section('title', 'Add New Author')

@section('content')
    <div style="padding: 40px; max-width: 600px; margin: 0 auto; background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); margin-top: 20px;">
        
        <!-- 1. Module Heading & Navigation Back -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h2 style="margin: 0;">➕ Add New Author</h2>
            <!-- 2. Point this back to your index route -->
            <a href="{{ route('authors.index') }}" style="text-decoration: none; color: #555;">← Back to List</a>
        </div>

        <hr style="margin-bottom: 20px;">

        <!-- Validation Error Alert Box -->
        @if ($errors->any())
            <div style="background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- 3. Form Action Setup (Always use POST for create) -->
        <form action="{{ route('authors.store') }}" method="POST">
            @csrf

            <!-- Example Field 1: Text Input -->
            <div style="margin-bottom: 20px;">
                <label for="name" style="display: block; font-weight: bold; margin-bottom: 8px;">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="biography" style="display: block; font-weight: bold; margin-bottom: 8px;">Biography:</label>
                <textarea id="biography" name="biography" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">{{ old('biography') }}</textarea>
            </div>

            <input type="hidden" name="is_active" value="1">

            <!-- Action Buttons -->
            <div style="display: flex; gap: 10px; margin-top: 25px;">
                <button type="submit" style="background-color: #4CAF50; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">
                    Save Record
                </button>
                <button type="reset" style="background-color: #f44336; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold;">
                    Clear Form
                </button>
            </div>
        </form>

    </div>
@endsection
