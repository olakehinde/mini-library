@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="row">
                        <div class="pull-left mx-4"><a href="/authors/create"><button class="btn btn-primary">Add Author</button></a></div>
                        <br><br><br><br>
                        <div class="pull-right"><a href="/books/create"><button class="btn btn-primary">Add Book</button></a></div>
                    </div>

                    <div class="row">
                        <div class="pull-left mx-4"><a href="{{route('authors.index')}}"><button class="btn btn-success">View Authors</button></a></div>
                        <br><br><br><br>
                        <div class="pull-right"><a href="{{route('books.index')}}"><button class="btn btn-success">View Books</button></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        
        
    </div>
</div>
@endsection
