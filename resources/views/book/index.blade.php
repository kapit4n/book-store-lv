@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Book list</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card" style="width: 14rem; display: inline-block;">
					  <img class="card-img-top" src="https://www.connect.ecuad.ca/sites/www.connect.ecuad.ca/files/imagecache/work_main_preview/users/794/work/282951/evolve_cover.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Programming in Scala</h5>
					    <p class="card-text">Programming in Scala is the definitive book on Scala,...</p>
					    <a class="nav-link" href="{{ route('book.show', ['book' => 1]) }}">Show</a>
					  </div>
					</div>
					<div class="card" style="width: 14rem; display: inline-block;">
					  <img class="card-img-top" src="https://www.connect.ecuad.ca/sites/www.connect.ecuad.ca/files/imagecache/work_main_preview/users/794/work/282951/evolve_cover.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Programming in Scala</h5>
					    <p class="card-text">Programming in Scala is the definitive book on Scala,...</p>
					    <a class="nav-link" href="{{ route('book.show', ['book' => 1]) }}">Show</a>
					  </div>
					</div>
					<div class="card" style="width: 14rem; display: inline-block;">
					  <img class="card-img-top" src="https://www.connect.ecuad.ca/sites/www.connect.ecuad.ca/files/imagecache/work_main_preview/users/794/work/282951/evolve_cover.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Programming in Scala</h5>
					    <p class="card-text">Programming in Scala is the definitive book on Scala,...</p>
					    <a class="nav-link" href="{{ route('book.show', ['book' => 1]) }}">Show</a>
					  </div>
					</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

