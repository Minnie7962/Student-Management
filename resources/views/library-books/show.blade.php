@extends('layouts.master')

@section('content')
    <h1>Library Book Details</h1>
    <table class="table table-striped">
        <tbody>
            <tr>
                <th>Title:</th>
                <td>{{ $libraryBook->title }}</td>
            </tr>
            <tr>
                <th>Author:</th>
                <td>{{ $libraryBook->author }}</td>
            </tr>
            <tr>
                <th>Publisher:</th>
                <td>{{ $libraryBook->publisher }}</td>
            </tr>
            <tr>
                <th>Published Date:</th>
                <td>{{ $libraryBook->published_date }}</td>
            </tr>
            <tr>
                <th>ISBN:</th>
                <td>{{ $libraryBook->isbn }}</td>
            </tr>
            <tr>
                <th>Quantity:</th>
                <td>{{ $libraryBook->quantity }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('library-books.index') }}" class="btn btn-secondary">Back to List</a>
@endsection