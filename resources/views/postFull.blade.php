@extends('layouts.layout')

@section('content')


<div class="row d-flex">
    <div class="col-sm-10 offset-sm-1 bg-light p-4" id="postFullView">
        <div class="post-header mt-2">
            <h1 class="d-inline">{{ $post->title }}</h1>
            <br>
            <i class="d-inline">created by {{ $post->poster}}</i>
            <i class="d-inline float-right p-auto">{{ $post->created_at->diffForHumans() }}</i>
        </div>
        <hr>
        <div class="row justify-content-center card-body m-3">
            <div class="col-md-4 p-2" id="postImage">
                <!--if-->
                <img src="{{ $post->image }}" class="card-img" alt="...">
                <!--elseif
                <img src="" alt="" class="entryImage">
                endif-->
            </div>
            <div class="col-md-8 mt-2 pr-3"  id="postContent">
                {{ $post->content }}
            </div>
        </div>
    </div>          
</div>

@endsection