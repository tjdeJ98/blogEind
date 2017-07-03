@extends('layouts.default')

@section('content')

    <div class="container first-container">
        <div class="jumbotron">
            <h1>BLOG</h1>
            <p>Dit is een JUMBOTRON voor onze BLOG</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title panel-title-xs">Laatste Post</h3>
                    </div>
                    <div class="panel-body" style="height: 170px">
                        <h3>{{ $postlast->title }}</h3>
                         <p class="first-line-of-post">{!! $postlast->text !!}</p>
                        <a href="posts.html" class="post-read-more">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title panel-title-xs">Populairste Post</h3>
                    </div>
                    <div class="panel-body">
                        <h3>Post titel</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nos.
                        </p>
                        <a href="newpost.html" class="post-read-more">Read more...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>POSTS
                        <small>De andere posts...</small></h1>
                </div>
                  @foreach($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>{{ $post->title }}</h3>
                        <div class="row">
                            <div class="col-md-11">
                                <p class="first-line-of-post">{!! $post->text !!}</p>
                            </div>
                            <div class="col-md-1">
                                <a href=""><span class="glyphicon glyphicon-circle-arrow-right icon-readmore"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                      @endforeach
            </div>
        </div>
    </div>


@stop