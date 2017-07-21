@extends('layouts.homelayout')
@section('head')
  <title>{!!$post->title!!}</title>
@endsection

@section('body')
  <div class="post-preview">
      <a href="{{route('index.showPost', $post)}}">
          <h2 class="post-title">
              {!!$post->title!!}
          </h2>
          <h3 class="post-subtitle">
              {!!$post->body!!}
          </h3>
      </a>
      <p class="post-meta">Posted at {!!$post->created_at!!}</p>
  </div>
@endsection
