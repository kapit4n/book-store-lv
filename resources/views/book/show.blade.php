@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Book Info</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card" style="width: 43rem;">
					  <img class="card-img-top" src="{{ $book['url']}}" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">{{ $book->name }}</h5>
					    <p class="card-text">{{ $book->description }} </p>
					    <a class="nav-link" href="{{ route('book.edit', ['book' => $book->id]) }}" style="display: inline-block;" style="display: inline:"><span class="glyphicon glyphicon-remove" aria-hidden="true">Edit</span></a>
                        <form action="{{action('BookController@destroy', $book['id'])}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-sm btn-danger" type="submit"><span class="glyphicon glyphicon-remove" aria-hidden="true">X</span></button>
                        </form>
					  </div>
					</div>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

