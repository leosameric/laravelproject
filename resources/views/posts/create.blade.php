{{-- get the template --}}
@extends('layouts.header')

{{-- replace the content section --}}
@section('content')
    
    <form method="post" action="/posts">
        <input type="text" name="title" placeholder="Enter Title">

        <input type="button" name="submit" value="submit">
    </form>

@endsection
