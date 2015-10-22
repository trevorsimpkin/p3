@extends('layouts.master');

@section('title')
    Cat Image Generator
@stop

@section('head')
@stop

@section('content')
<div class="jumbotron">
    <h1>Cat Image Generator!</h1>
    <form method ='POST' action='/cat'>
        <input type='hidden' name='_token' value='{{csrf_token()}}'>
        <label for="width">Width: </label>
        <input maxlength="3" name="width" type="text" value='{{old('width')}}' id="width"> (50-800)
        <br>
        <label for="height">Height: </label>
        <input maxlength="3" name="height" type="text" value='{{old('height')}}' id="height"> (50-800)
        @if(count(@errors)>0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <input type="submit" value="Generate!">
    </form>
    <img src={{$image}} style="width:{{$width}};height:{{$height}};">
</div>
@stop
