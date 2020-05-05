@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('books.store')}}" method="post">
                @csrf()
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Book title">
                </div>
                <div class="form-group">
                    <label for="pages">No. of Pages</label>
                    <input type="text" name="pages" class="form-control" id="pages" aria-describedby="emailHelp" placeholder="Enter number of pages">
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Authors</label>
                        </div>
                        <select class="custom-select" name="author_id" id="inputGroupSelect01">
                            <option selected>Choose author </option>
                            @foreach($authors as $author)
                            <option value="{{$author->id}}">{{$author->firstname." ".$author->lastname}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
