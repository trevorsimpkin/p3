@extends('layouts.master');

@section('title')
    Random User Generator
@stop

@section('head')
@stop

@section('content')
@section('nav')
    <li><a href="/">Home</a></li>
    <li><a href="/loremipsum">Lorem Ipsum Generator</a></li>
    <li class="active"><a href="#">Random User Generator</a></li>
@stop
<div class="jumbotron">
    <h1>Random User Generator</h1>
    <form method ='POST' action='/randomuser'>
        <input type='hidden' name='_token' value='{{csrf_token()}}'>
        <label for="numberOfUsers">Number of Users</label>
        <input maxlength="2" name="numberOfUsers" type="text" value='{{old('numberOfUsers')}}' id="numberOfUsers"> (Max: 99)
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
