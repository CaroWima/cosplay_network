@extends('layouts.layout')

@section('content')

<!--@include('components.searchBlog')-->
@include('components.codeOfConduct')
<div class="row d-flex p-3">
    <div class="col-sm-10 offset-sm-1">
        <ul class="list-inline mx-auto justify-content-center">
            <!--foreach-->
            <li class="list-unstyled list-inline-item" id="postObject">
                <div class="card" id="postPreview">
                    <div class="card-header pt-3 px-3">
                        <h2 class="d-inline"><a href="">Post Title</a></h2>
                        <br>
                        <i class="d-inline">created by (poster)</i>
                        <i class="d-inline float-right p-auto">created at (time)</i>
                    </div>
                    <div class="row justify-content-center card-body m-3">
                        <div class="col-4" id="postImage">
                            <!--if-->
                            <img src="{{ asset('img/placeholder-square.jpg')}}" class="card-img" alt="...">
                            <!--elseif
                            <img src="" alt="" class="entryImage">
                            else-->
                        </div>
                        <div class="col-8 pr-3"  id="postContent">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Praesentium consequatur aliquam, saepe autem perspiciatis,
                                illo aperiam facilis aspernatur reprehenderit nobis sunt vero
                                similique voluptatibus ipsum laboriosam facere nulla est quo.
                                <i>... read more</i></p>
                        </div>
                    </div>
                </div>
            </li>
         <!--endforeach-->
        </ul>
</div>
</div>

@endsection