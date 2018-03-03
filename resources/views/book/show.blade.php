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
					  <img class="card-img-top" src="https://www.connect.ecuad.ca/sites/www.connect.ecuad.ca/files/imagecache/work_main_preview/users/794/work/282951/evolve_cover.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">{{ $book->name }}</h5>
					    <p class="card-text">{{ $book->description }} </p>
					    <a class="nav-link" href="{{ route('book.update', ['book' => $book->id]) }}" style="display: inline-block;"><span class="glyphicon glyphicon-remove" aria-hidden="true">Edit</span></a>
					  </div>
					</div>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

