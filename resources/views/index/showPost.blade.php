@extends('layouts.homelayout')
@section('head')
  <title>{!!$post->title!!}</title>

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
  <h4 class="post-subtitle">Comments</h4>
  <hr>

  @foreach ($comment as $comments)

      <p class="post-meta">{{$comments->content}}</p>

  @endforeach

@endsection
