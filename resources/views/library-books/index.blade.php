@extends('layouts.master')

@section('content')
    <h1>Library Books</h1>
    <p><a href="{{ route('library-books.create') }}" class="btn btn-primary">Create New Library Book</a></p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Published Date</th>
                <th>ISBN</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($libraryBooks as $libraryBook)
                <tr>
                    <td>{{ $libraryBook->title }}</td>
                    <td>{{ $libraryBook->author }}</td>
                    <td>{{ $libraryBook->publisher }}</td>
                    <td>{{ $libraryBook->published_date }}</td>
                    <td>{{ $libraryBook->isbn }}</td>
                    <td>{{ $libraryBook->quantity }}</td>
                    <td>
                        <a href="{{ route('library-books.show', $libraryBook->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('library-books.edit', $libraryBook->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('library-books.destroy', $libraryBook->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection