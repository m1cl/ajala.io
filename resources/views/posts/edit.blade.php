@extends('main')

@section('title', '| Edit Post')

@section('content')
      <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
        <div class="col-md-8">

            <!-- Form::text('the-column-name-in-the-databse', value , array(html attributes)) -->
          {{Form::label( 'title', 'Title:')}}
          {{ Form::text( 'title', null, [ "class" => 'form-control input-lg', 'required' => "" ]) }}

          {{ Form::label('slug', "Slug:", ['class' => 'form-spacing-top']) }}
          {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '','minlength'=> '5','maxlength' => '255')) }}

          {{Form::label( 'body', 'Post Body:', ['class' => 'form-spacing-top'])}}
          {{ Form::textarea( 'body', null, ['class' => 'form-control', 'required' => "" ]) }}
        </div>
        <div class="col-md-4">   
          <div class="well">
            <dl class="dl-horizontal">
              <label>Created at:</label>
              <p>{{ date('D j M Y, H:i', strtotime($post->created_at)) }}</p>
              <label>Last Updated:</label>
              <p>{{ date('D j M Y, H:i', strtotime($post->updated_at)) }}</p>
            </dl>
            <hr />
            <div class="row">
              <div class="col-sm-6">
                {{ Form::submit('Save', ['class' => 'btn btn-success btn-block'])}}
              </div>
              <div class="col-sm-6">
                {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block' )) !!}
              </div>
            </div>
          </div>
       </div>
      {!! Form::close() !!}
      </div> <!-- end of .row -->
@endsection
