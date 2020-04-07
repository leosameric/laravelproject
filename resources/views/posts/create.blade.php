{{-- get the template --}}
@extends('layouts.header')

{{-- replace the content section --}}
@section('content')
    
    <h1>Create a Post</h1>
    {!! Form::open(['method'=>'POST', 'action'=>'PostController@store', 'style'=>'display:flex; flex-direction:column; max-width:30%;']) !!}
    
    <div>
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title',null , ['class' => 'form-control']) !!}
    </div>
    <div>
        {!! Form::label('body', 'Content:') !!}
        {!! Form::textarea('body',null , ['class' => 'form-control', 'style' => '']) !!}  
    </div>

        {!! Form::submit('submit', null, ['style'=>'']) !!}

    {!! Form::close() !!}

    @if (count($errors) > 0)
        
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    
    @endif

@endsection


