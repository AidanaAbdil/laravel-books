@extends('layouts.main')

@section('content')
    <h1>Create a New Author</h1>

    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio"></textarea>
        </div>

        <input type="submit" value="'Submit">
    </form>
@endsection
