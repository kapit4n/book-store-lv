@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a class="nav-link" href="{{ route('book.create') }}">Add</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($books as $book)
	                    <div class="card" style="width: 14rem; display: inline-block; height: 30rem; overflow: hidden; text-overflow: ellipsis;">
						  <img class="card-img-top" height= "250px" src="{{ $book['url']}}" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-title" style="height: 30px;"><strong>{{ $book->name }}</strong></p>
						    <p class="card-text" style="height: 50px; overflow: hidden; text-overflow: ellipsis;">{{ $book->description }},...</p>
                            <div>
                                <a class="nav-link" href="{{ route('book.show', ['book' => $book->id]) }}" style="display: inline-block;"><span class="glyphicon glyphicon-eye-open" aria-hidden="true">Show</span></a>
                                <a class="nav-link" href="{{ route('book.edit', ['book' => $book->id]) }}" style="display: inline-block;"><span class="glyphicon glyphicon-eye-pencil" aria-hidden="true">Edit</span></a>
                                <form action="{{action('BookController@destroy', $book['id'])}}" method="post" style="display: inline-block;">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-sm btn-danger" type="submit"><span class="glyphicon glyphicon-remove" aria-hidden="true">X</span></button>
                                </form>
                            </div>
						  </div>
						</div>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

