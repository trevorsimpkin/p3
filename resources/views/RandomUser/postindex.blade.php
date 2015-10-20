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
        <br>
        <label for='email'>Email Address</label>
        <input name='email' type='checkbox'id='email'>
        <br>
        <label for='phone'>Phone Number</label>
        <input name='phone' type='checkbox'id='phone'>
        <br>
        <label for='username'>User Name</label>
        <input name='username' type='checkbox'id='username'>
        <br>
        <label for='password'>Password</label>
        <input name='password' type='checkbox'id='password'>
        <br>
        @if(count(@errors)>0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <input type="submit" value="Generate!">
    </form>
    @foreach ($users as $user)
        {{ $user}}<br>
    @endforeach
</div>
@stop