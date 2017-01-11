@extends('main')

@section('title', '| View Post')

@section('content')
      <div class="row">
        <div class="col-md-8">
          <h1>{{ $post->title }}</h1>
            <div col-md-4>
              <p class="lead">{{ $post->body }}</p>
            </div>
        </div>
        <div class="col-md-4">   
          <div class="well">
            <dl class="dl-horizontal">
              <label>slug:</label>
              <p><a href="{{ route('blog.single', $post->slug)}}">{{ route('blog.single', $post->slug)}}</a></p>

              <label>Created at:</label>
              <p>{{ date('D j M Y, H:i', strtotime($post->created_at)) }}</p>
              <label>Last Updated:</label>
              <p>{{ date('D j M Y, H:i', strtotime($post->updated_at)) }}</p>
            </dl>
            <hr />
            <div class="row">
              <div class="col-sm-6">
                {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block' )) !!}
              </div>
              <div class="col-sm-6">
                {!! Form::open(['route' => ['posts.show', $post->id], 'method' => 'DELETE']) !!}

                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block' ]) !!}
                {!! Form::close() !!}
              </div>
            </div>
                <div>
                  {!! Html::decode(Html::linkRoute('posts.show', '<div class="show-posts-icon"><i class="align justify icon"></i></div>', array(''), array('class' => 'btn btn-default btn-block all-posts-btn-spacing' ))) !!}
                </div>
          </div>
       </div>
      </div>
@endsection
