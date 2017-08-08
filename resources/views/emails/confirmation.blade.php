@extends('layouts.app')

@section('content')
  <h1>Thank you for Sign Up!</h1>
  <p>
    You need to <a href='{{ url("register/confirm/{$user->token}") }}'> confirm your email address.</a>
  </p>
@endsection
