@extends('layouts.master')

@section('content')
    <h1>Edit Library Book</h1>
    <form action="{{ route('library-books.update', $libraryBook->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $libraryBook->title }}" required>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $libraryBook->author }}" required>
        </div>
        <div class="form-group">
            <label for="publisher">Publisher</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $libraryBook->publisher }}" required>
        </div>
        <div class="form-group">
            <label for="published_date">Published Date</label>
            <input type="date" class="form-control" id="published_date" name="published_date" value="{{ $libraryBook->published_date }}" required>
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $libraryBook->isbn }}" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $libraryBook->quantity }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection