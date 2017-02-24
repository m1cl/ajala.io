@extends('main')

@section('title', '| Register')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::label('name', "First name:") }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
           
            {{ Form::label('name', "Last name:") }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}

            {{ Form::label('password', "Password:") }}
            {{ Form::password('password', ['class' => 'form-control']) }}

            {{ Form::label('password_confirmation', "Confirm Password:") }}
            {{ Form::password('password', ['class' => 'form-control']) }}
            <br/>
            {{ Form::submit('Register', ['class' => 'btn btn-block btn-primary'])}}
            {{ Form::close() }}
        </div>
    </div>
@endsection
