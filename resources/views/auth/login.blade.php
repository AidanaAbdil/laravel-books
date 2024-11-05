@extends('layouts/main',[
'current_page' => 'register'
])

@section('content')

@if(!auth()->check()) 

<form action="{{ route('login') }}"  method="post">

    @csrf
    <label for="email">Enter your email: </label>
    <input type="email" name="email" value="{{ old('email') }}">
    <label for="password">Enter your password:</label>
    <input type="text" name="password" value="{{ old('password') }}">


    <button>Log in</button>

</form>

@endif


@endsection