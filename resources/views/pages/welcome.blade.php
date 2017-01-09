@extends('main')
@section('title', '|Homepage')
@section('stylesheets')
  <!-- you can put your custom stylesheets here -->
@endsection
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>Welcome to my Blog</h1>
        <p class="lead">Thank you so much for visiting. This is my blog</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
      </div>
    </div>
  </div><!-- End of header .row -->

  <div class="container">
   <div class="row">
    <div class="row col-md-8">
      @foreach( $posts as $post)
      <div class="post">
        <h3>{{$post->title}}</h3>
        <p>{{ substr($post->body, 0, 300)}}{{ strlen($post->body) > 300? "...": ""}}</p>
        <a class="btn btn-primary" href="{!! route('posts.show', $post->id) !!}">Read More</a>
      </div>
      <hr>
      @endforeach
      <hr>
    </div>
    <div class="col-md-3 col-md-offset-1" style="">
      <h3>SIDEBAR</h3>
    </div>
  </div>
  </div>
@endsection
