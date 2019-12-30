@extends('layouts.header')

@section('content')
    <h1> content page <h1>

    @if (count($people) > 0)
        <ul>
        @foreach ($people as $person)
            <li>{{$person}}</li>
        @endforeach

        </ul>
    @endif

@endsection



@section('footer')
    
@endsection