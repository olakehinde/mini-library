@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            @if(!isset($authors) || count($authors) < 1)
                <h4>No authors added to the library yet. </h4>
                <a href="{{route('authors.create')}}"><button type="button" class="btn btn-sm btn-success">Add Author</button></a>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($authors as $author)
                        <tr>
                            <td>{{$author->firstname}}</td>
                            <td>{{$author->lastname}}</td>
                            <td>{{$author->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
    
@endsection