@extends('layouts.layout')

@section('content')


<div class="row d-flex">
    <div class="post-container col-sm-10 offset-sm-1 p-4" id="postFullView">
        <div class="post-header mt-2">
            <h1 class="d-inline">{{ $post->title }}</h1>
            <br>
            <i class="d-inline">created by user</i>
            <i class="d-inline float-right p-auto">{{ $post->created_at->diffForHumans() }}</i>
        </div>
        <hr>
        <div class="row justify-content-center card-body m-3">
            <div class="col-md-10 p-2" id="postImage">
                <!--if-->
                <img class="w-100" src="{{ asset('img/TNSWH_LDP.jpg') }}">
                <!--elseif
                <img src="" alt="" class="entryImage">
                endif-->
            </div>
            <div class="col-md-10 mt-2 pr-3"  id="postContent">
                {{ $post->content }}
            </div>
        </div>
    </div>          
</div>

@endsection