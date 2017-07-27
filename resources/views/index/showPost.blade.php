@extends('layouts.homelayout')

@section('head')
  <title>MateBlog | {!!$post->title!!}</title>

  <link rel="stylesheet" href="./css/postStyles.min.css">
@endsection

@section('body')

  <div class="post-preview">
          <h1 class="post-title">
              {!!$post->title!!}
          </h1>
          <h4 class="post-subtitle">
              {!!$post->body!!}
          </h4>
      <p class="post-meta">Posted at {!!$post->created_at!!}</p>
  </div>
  <hr>
  <h4 class="post-subtitle">Add your Comment</h4>
  <div class="row">
    <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top:3%">
      {!!Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST'])!!}
        <div class="row">
          <div class="col-md-6">
            {!!Form::label('name', "Name:")!!}
            {!!Form::text('name', null, ['class' => 'form-control'])!!}
          </div>
          <div class="col-md-6">
            {!!Form::label('email', "E-mail:")!!}
            {!!Form::text('email', null, ['class' => 'form-control', 'rows' => '5'])!!}
          </div>
          <div class="col-md-12">
            {!!Form::label('content', "Comment:")!!}
            {!!Form::textarea('content', null, ['class' => 'form-control'])!!}
            {!!Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:5%'])!!}
          </div>
        </div>
      {!!Form::close()!!}
    </div>
  </div>
  <hr>
  <h4 class="post-subtitle">Comments</h4>
  <hr>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      @foreach($post->comments as $comment)
        <h3 class="post-subtitle">
          {{$comment->name}}
          <h6>{{$comment->created_at}}<h6>
        </h3>
        <p>{!!$comment->content!!}</p>
        <hr>
      @endforeach
    </div>
  </div>


@endsection
