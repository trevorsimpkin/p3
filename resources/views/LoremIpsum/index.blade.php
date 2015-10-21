@extends('layouts.master');

@section('title')
    Lorem Ipsum Generator
@stop

@section('head')
@stop

@section('content')
    <div class="jumbotron">
        <h1>Lorem Ipsum Generator</h1>
        <form method ='POST' action='/loremipsum'>
            <input type='hidden' name='_token' value='{{csrf_token()}}'>
            <label for="paragraphs">Paragraphs</label>
            <input maxlength="2" name="paragraphs" type="text" value='{{old('paragraphs')}}' id="paragraphs"> (Max: 99)
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
