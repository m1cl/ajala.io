@extends('main')

@section('title', '| All Posts')

@section('content')
  <div class="row">
    <div class="col-md-10">
      <h1>All Posts</h1>
    </div>

    <div class="col-md-2">
      <a class="btn btn-lg btn-block btn-primary btn-h1-spacing" href="{{ route('posts.create')}}">Create new Post</a>
    </div>
    <hr>
  </div>
@endsection
