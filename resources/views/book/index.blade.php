@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a class="nav-link" href="{{ route('book.create') }}">Add</a></div>

                <div class="card-body">2
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($books as $book)
	                    <div class="card" style="width: 14rem; display: inline-block;">
						  <img class="card-img-top" src="https://www.connect.ecuad.ca/sites/www.connect.ecuad.ca/files/imagecache/work_main_preview/users/794/work/282951/evolve_cover.jpg" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">{{ $book->name }}</h5>
						    <p class="card-text">{{ $book->description }},...</p>
                            <a class="nav-link" href="{{ route('book.show', ['book' => $book->id]) }}" style="display: inline-block;"><span class="glyphicon glyphicon-eye-open" aria-hidden="true">Show</span></a>
                            <form action="{{action('BookController@destroy', $book['id'])}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-sm btn-danger" type="submit"><span class="glyphicon glyphicon-remove" aria-hidden="true">X</span></button>
                            </form>
						  </div>
						</div>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

