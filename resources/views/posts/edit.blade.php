{{-- get the template --}}
@extends('layouts.header')

{{-- replace the content section --}}
@section('content')
    
    <h1>Edit a Post</h1>

    {!! Form::model($post, ['method' => 'put', 'route' => ['posts.update', $post->id] , 'style'=>'display:flex; flex-direction:column; max-width:30%;']) !!}

        {{-- {!! Form::hidden('id', $post->id) !!} --}}
    <div>
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', $post->title , ['class' => 'form-control']) !!}
    </div>
    <div>
        {!! Form::label('body', 'Content:') !!}
        {!! Form::textarea('body',$post->body , ['class' => 'form-control', 'style' => '']) !!}  
    </div>

        {!! Form::submit('submit', null, ['style'=>'']) !!}

    {!! Form::close() !!}


    {{-- Delete button --}}
    {!! Form::model($post, ['method' => 'delete', 'route' => ['posts.destroy', $post->id] , 'style'=>' max-width:30%;']) !!}

        {!! Form::submit('delete', null) !!}
    {!! Form::close() !!}

@endsection