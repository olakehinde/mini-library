@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card w-50">
                <div class="card-body">
                    <h5 class="card-title">{{$book->title}}</h5>
                    <p class="card-text">Written by: {{$book->author->firstname." ". $book->author->lastname}}</p>
                    <a href="{{route('books.index')}}" class="btn btn-sm btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection