{{-- get the template --}}
@extends('layouts.header')

{{-- replace the content section --}}
@section('content')


    <ul>
        @foreach ($posts as $post)

            <li><a href="{{route('posts.show' , $post->id)}}">{{$post->title}}</a></li>
        @endforeach
        
    </ul>

@endsection