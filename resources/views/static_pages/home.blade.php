@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    This is the main page!

    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Sign up now</a>
    </p>
  </div>
@stop
