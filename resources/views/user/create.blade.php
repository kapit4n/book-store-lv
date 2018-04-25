@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create User Page</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('book.store') }}" method="POST">
                        {{ csrf_field() }}
                       <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                      </div>
                       <div class="form-group">
                        <label for="url">Image:</label>
                        <input type="text" class="form-control" id="url" name="url">
                      </div>
                      <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" id="description" name="description">
                      </div>
                      <button type="submit" class="btn btn-default">Save</button>
                    </form>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
