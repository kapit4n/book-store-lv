@extends('layouts.app')

@section('content')
<div class="container">
    <a class="nav-link" href="{{ route('user.create') }}">Add</a>
    <ul class="list-group">
        @foreach ($users as $user)
        <li class="list-group-item">
        {{ $user->name }}, 
        {{ $user->email }}  
        <a class="nav-link" href="{{ route('user.show', ['user' => $user->id]) }}" style="display: inline-block;"><span class="glyphicon glyphicon-eye-open" aria-hidden="true">Show</span></a>
        <a class="nav-link" href="{{ route('user.edit', ['user' => $user->id]) }}" style="display: inline-block;"><span class="glyphicon glyphicon-eye-pencil" aria-hidden="true">Edit</span></a>
        <form action="{{action('UserController@destroy', $user['id'])}}" method="post" style="display: inline-block;">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-sm btn-danger" type="submit"><span class="glyphicon glyphicon-remove" aria-hidden="true">X</span></button>
        </form>
        </li>
        @endforeach
    </ul>
</div>
@endsection

