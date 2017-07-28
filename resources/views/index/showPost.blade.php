@extends('layouts.homelayout')

@section('meta')
  <meta name="keywords" content="{!!$post->meta_keywords!!}">
  <meta name="description" content="{!!$post->meta_description!!}">
@endsection

@section('head')
  <title>MateBlog | {!!$post->seo_title!!}</title>
  <link rel="stylesheet" href="../../css/postStyles.min.css">
@endsection

@section('body')
<section class="post">
  <div class="post__preview">
          <h1 class="post__title">
              {!!$post->title!!}
          </h1>
          <article class="post__body">
              {!!$post->body!!}
          </article>
      <time class="post-meta">Posted at {!!$post->created_at!!}</time>
  </div>
</section>
<section class="comments">
  <section class="comments__writing">
    <span class="comments__header">Add your Comment</span>
    <div class="form">
    <div id="comment__form" class="comment__form">
      @if(Auth::guest())
        {!!Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST'])!!}
          <div class="comment-form">
            <div class="name">
              {!!Form::label('name', "Name:")!!}
              {!!Form::text('name', null, ['class' => 'form-control'])!!}
            </div>
            <div class="email">
              {!!Form::label('email', "E-mail:")!!}
              {!!Form::text('email', null, ['class' => 'form-control', 'rows' => '5'])!!}
            </div>
            <div class="comment">
              {!!Form::label('content', "Comment:")!!}
              {!!Form::textarea('content', null, ['class' => 'form-control'])!!}
              {!!Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:5%'])!!}
            </div>
          </div>
        {!!Form::close()!!}
      @else
        {!!Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST'])!!}
          <div class="row">
            {!!Form::hidden('name', Auth::user()->name)!!}
            {!!Form::hidden('email', Auth::user()->email)!!}

            <div class="comment__writing-items">
              {!!Form::label('content', "Comment:")!!}
              {!!Form::textarea('content', null, ['class' => 'form-control'])!!}
              {!!Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:5%'])!!}
            </div>
          </div>
        {!!Form::close()!!}
      @endif
    </div>
    </div>
  </section>
  <h4 class="comments__header">Comments</h4>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      @foreach($post->comments->sortByDesc('created_at') as $comment)
        <h3 class="post-subtitle">
          {{$comment->name}}
          <h6>{{$comment->created_at}}<h6>
        </h3>
        <p>{!!$comment->content!!}</p>
      @endforeach
    </div>
  </div>
</section>
    <script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/vue/2.3.2/vue.js"></script>
    <script src="../../js/main.js"></script>

@endsection
