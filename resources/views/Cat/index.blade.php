@extends('layouts.master');

@section('title')
    Cat Image Generator
@stop

@section('head')
@stop

@section('content')
@section('nav')
    <li><a href="/">Home</a></li>
    <li><a href="/loremipsum">Lorem Ipsum Generator</a></li>
    <li><a href="/randomuser">Random User Generator</a></li>
    <li class='active'><a href = #>Cat Image Generator</a><</li>
@stop
<div class="jumbotron">
    <h1>Cat Image Generator!</h1>
    <form method ='POST' action='/cat'>
        <input type='hidden' name='_token' value='{{csrf_token()}}'>
        <label for="width">Width: </label>
        <input maxlength="3" name="width" type="text" value='{{old('width')}}' id="width"> (10-800)
        <br>
        <label for="height">Height: </label>
        <input maxlength="3" name="height" type="text" value='{{old('height')}}' id="height"> (10-800)
        @if(count(@errors)>0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <input type="submit" value="Generate!">
    </form>
</div>
@stop
