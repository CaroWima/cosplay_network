@extends('layouts.layout')

@section('content')

<!--include('components.searchBlog')
include('components.codeOfConduct')-->

<!--add collapse button for edit -->

@include('components.create-edit-post')
<hr>
<div class="row d-flex p-3">
    <div class="col-sm-10 offset-sm-1">
        <ul class="list-inline mx-auto justify-content-center">

            @foreach($posts as $post)
            <li class="list-unstyled list-inline-item my-2 w-100" id="postObject">
                <div class="card" id="postPreview">
                    <div class="card-header pt-3 px-3">
                        <h2 class="d-inline"><a href="/postFull/{{ $post->id }}">{{ $post->title }}</a></h2>
                        <br>
                        <i class="d-inline">created by {{$post->poster}} </i>
                        <i class="d-inline float-right p-auto">created at {{ $post->created_at->diffForHumans() }}</i>
                    </div>
                    <div class="row justify-content-center card-body m-3">
                        <div class="col-sm-4 p-2" id="postImage">
                            <!--if-->
                            <img src="{{ $post->image }}" class="card-img" alt="...">
                            <!--elseif
                            <img src="" alt="" class="entryImage">
                            else-->
                        </div>
                        <div class="col-sm-8 mt-2 pr-3"  id="postContent">
                            {{ $post->description}}
                            <br>
                            {{\Illuminate\Support\Str::limit($post->content, 150)}}
                            @if (strlen($post->content) > 150)
                                <span id="ellipses">...</span>
                                <span id="more">{{ substr($post->content, 150) }}</span>
                            @endif
                            <a href="/postFull/{{$post->id}}">Read more</a>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection