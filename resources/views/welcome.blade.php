@extends('layouts.master');

@section('title')
    Developer's Best Friend
@stop

@section('head')
@stop

@section('content')
@section('nav')
    <li class="active"><a href="#">Home</a></li>
    <li><a href="/loremipsum">Lorem Ipsum Generator</a></li>
    <li><a href="/randomuser">Random User Generator</a></li>
@stop
<div class="jumbotron">
    <h1>Developer's Best Friend</h1>

</div>
<div class="row">
    <div class="col-xs-6 col-lg-4">
        <h2><a href="/loremipsum">Lorem Ipsum Generator</a></h2>
        <p>Generates designated amount of Lorem Ipsum paragraphs.</p>
    </div><!--/.col-xs-6.col-lg-4-->
    <div class="col-xs-6 col-lg-4">
        <h2><a href="/randomuser">Random User Generator</a></h2>
        <p>Generates designated amount of random users. Options for types of information. </p>
    </div><!--/.col-xs-6.col-lg-4-->
</div><!--/row-->
@stop
