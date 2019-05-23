@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Welcome to Laravel</h1>
    @if(Auth::guest())
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-primary btn-lg" href="/Register" role="button">Register</a>     
    @endif
    </div>
@endsection