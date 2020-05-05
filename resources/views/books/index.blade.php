@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            @if(!isset($books) || count($books) < 1)
                <h4>No books added to the library yet. </h4>
                <a href="{{route('books.create')}}"><button type="button" class="btn btn-sm btn-success">Add Book</button></a>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">No. of Pages</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author->firstname." ".$book->author->lastname}}</td>
                            <td>{{$book->pages}}</td>
                            <td>
                                <a href="{{route('books.show', [$book->id])}}">
                                    <button type="button" class="btn btn-sm btn-primary"> View </button>
                                </a>
                                <form action="{{route('books.destroy', [$book->id])}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger"> Delete </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
    
@endsection