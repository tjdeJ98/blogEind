@extends('layouts/default')

@section('content')
<div class = "container first-container">

    <div class ="row">

        <div class = "col-md-12">
            <h1>{{$post->title}}</h1>
            <p>{{$post->text}}</p>
            <a href="">{{$post->user->username}}</a>
        </div>

        
    </div>
</div>
    @stop