@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Book Page</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card" style="width: 43rem;">
					  <img class="card-img-top" src="https://www.connect.ecuad.ca/sites/www.connect.ecuad.ca/files/imagecache/work_main_preview/users/794/work/282951/evolve_cover.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Programming in Scala</h5>
					    <p class="card-text">Programming in Scala is the definitive book on Scala, the new language for the Java Platform that blends object-oriented and functional programming concepts into a unique and powerful tool for developers. Coauthored by the designer of the Scala language, this authoritative book will teach you, one step at a time, the Scala language and the ideas behind it. The book is carefully crafted to help you learn. The first few chapters will give you enough of the basics that you can already start using Scala for simple tasks. The entire book is organized so that each new concept builds on concepts that came before - a series of steps that promises to help you master the Scala language and the important </p>
					    <a href="#" class="btn btn-primary">Edit</a>
					  </div>
					</div>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

