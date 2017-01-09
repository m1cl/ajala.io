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
  </div> <!-- end .row -->
  <div class="row">
    <div class="col-md-12">
      <table class="table table-hover">
      <thead>
        <th>
          #
        </th>
        <th>Title</th>
        <th>Body</th>
        <th>Created at</th>
        <th></th>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr onclick="window.document.location='{{ route('posts.show', $post->id)}}'"> 
            <th> {{ $post->id }}</th>
            <th>{{ $post->title }}</th>
            <th>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</th>
            <th>{{ date('M j Y, H:i', strtotime($post->created_at)) }}</th>
            <th>
              <a class="btn btn-default btn-sm" href="{{ route('posts.edit', $post->id) }}">Edit</a>
            </th>
        </tr>
        @endforeach
      </tbody>
      </table>
    </div>
  </div>
@endsection
