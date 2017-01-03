@extends('main')
@section('title', '|Contact')

@section('content')
  <div class="row">
    <div class="col-md-12">
        <h1>Contact Me</h1>
        <form action="">
          <div class="form-group">
            <label name="email">Email:</label>
                <input id="email" name="email" class="form-control" type="email">
          </div>
          <div class="form-group">
            <label name="subject">Subject:</label>
                <input id="subject" name="subject" class="form-control" type="">
          </div>
          <div class="form-group">
            <label name="message">Message:</label>
                <textarea id="message" name="message" class="form-control" type="" placeholder="Type your message here..."></textarea>
          </div>
          <input type="submit" value="send message" class="btn btn-success">
        </form>
      </div>
    </div>
@endsection
