@extends('layouts/main',[
    'current_page' => 'home'
])

@section('content')


    <div id="latest-books"></div>

 
      @foreach ($books as $book)
        <div class="book">
           <label for="title">Title:</label>
            {{$book->title}} <br>
            <label for="author">Author:</label>
            {{ $book->authors->pluck('name')->join(', ') }} 
            <br><br>
        </div>
        @endforeach


@endsection

<!-- @Vite('resources/js/script.js') -->