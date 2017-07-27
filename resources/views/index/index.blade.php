@extends('layouts.homelayout')

@section('head')
  <title>Mate Blog</title>
  <link rel="stylesheet" href="/css/postStyles.min.css">
@endsection

@section('body')
    <section class="posts">
        @foreach ($posts as $post)
          <div class="post__preview">
              <a href="{{route('index.showPost', $post)}}">
                  <h2 class="post__title">
                      {!!$post->title!!}
                  </h2>
                  <h3 class="post__subtitle">
                      {!!$post->excerpt!!}
                  </h3>
              </a>
              <p class="post__meta">Posted at {!!$post->created_at!!}</p>
          </div>
          <hr>
        @endforeach
      <!--
          <div class="post__preview" v-for="post in posts">
              <a class="post__link" href="">
                  <h2 class="post__title">
                      @{{ post.title }}
                  </h2>
                  <h3 class="post__subtitle">
                        @{{ post.body }}
                  </h3>
              </a>
              <p class="post__meta">@{{ post.date }}</p>
          </div>
        -->
    </section>

@endsection
