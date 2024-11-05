@extends('layouts/main',[
    'current_page' => 'register'
])

@section('content')

<form action="{{ route('register') }}" method="post">
 
    @csrf
    <label for="name">Name: </label><br>
    <input type="text" name="name" value="{{ old('name') }}"> <br>
    <label for="email">Email: </label><br>
    <input type="email" name="email" value="{{ old('email') }}"> <br>
    <label for="password">Password: </label><br>
    <input type="password" name="password" value=""> <br>
    <label for="password">Confirm Password: </label><br>
    <input type="password" name="password_confirmation" value="">
    <br>
    <button>Register</button>
 
</form>

@endsection