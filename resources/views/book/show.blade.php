@extends('layouts/main',[
'current_page' => ''
])

@section('content')

<h2>Title:</h2>
{{$book->title}}
<p>Language:</p>
{{$book->language}}
<p>Price:</p>
{{$book->price}}

<br>
<br>
<br>
<br>


<form action="{{ route('review.store', ['book_id' => $book->id]) }}" method="POST">
    @csrf

    <h2>Submit a review</h2>

    <input type="hidden" name="book_id" value="{{$book->id}}">

    <label for="text">Your Review:</label>
    <textarea name="text" id="text" rows="4" required></textarea>

    <button type="submit">Submit Review</button>
</form>
<br>
<br>
<br>

<h3>Reviews</h3>
@foreach ($book->reviews as $review)

<label for="user">User:</label>
{{$review->user_id}} <br>
<label for="text" class="textarea"></label>
{{$review->text}}





@can('admin')
<form action="{{ route('review.delete', ['book_id' => $book->id, 'review_id' => $review->id])}}" , method="post">
    @csrf

    @method('DELETE')

    <button>Delete</button>
</form>
@endcan

@endforeach



@endsection