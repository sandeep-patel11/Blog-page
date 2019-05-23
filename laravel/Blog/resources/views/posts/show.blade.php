@extends('layouts.app')
@section('content')
    <a href="/laravel/first-project/public/posts" class="btn btn-default"> Go back </a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/laravel/first-project/public/storage/cover_images/{{$post->cover_image}}" alt="">
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
    <a href="/laravel/first-project/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif
    @endif
@endsection