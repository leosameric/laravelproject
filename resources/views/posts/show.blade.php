{{-- get the template --}}
@extends('layouts.header')

{{-- replace the content section --}}
@section('content')


    <h1>{{$post->title}}</h1>
    <div>{{$post->body}}</div>
    <br><br>

    <div>Created At: {{$post->created_at}} </div>

<div><a href="{{route('posts.edit', $post->id)}}">Edit</a></div>

@endsection