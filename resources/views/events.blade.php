@extends('layouts.layout')

@section('content')

<!--include('components.searchbar')-->

@include('components.events-carousel')

<div class="row d-flex p-3">
    <div class="col-sm-12 text-center">
        <div class="card">
    
            <div class="card-header p-3">
                <h1>Upcoming Event:</h1>
            </div>
    
            <div class="row no-gutters m-4">
                <div class="col-md-6 p-2">
                    <img src="{{ asset('img/heroFest.jpg')}}" class="card-img" alt="...">
                </div>
                <div class="col-md-6 p-3 text-left">
                    <div class="card-body">
                        <h3 class="card-title">HeroFest</h3>
                        <p class="card-text">
                            Don't believe me, 
                            I am hardcoded and not yet the preview to an upcoming event!</p>
                        <p class="card-text"><small class="text-muted">Last updated who knows</small></p>
                    </div>
                    <div class="card-button m-3 justify-content-end">
                        <button class="btn btn-info float-right"> this will be a link</button>
                    </div>
                </div>
            </div>     
        </div>
    </div>
</div>

<hr>

<div class="row justify-content-center  p-3">
    <div class="col-sm-10 offset-sm-1 m-3 text-center">
        <h1>Logo Area, Where all the cool logos  hang out</h1>
            <hr>
        <div class=" row card-events p-3">
            <div class="col-4 p-2">
                <img src="{{ asset('img/doge_placeholder.jpg')}}" class="card-img" alt="...">
            </div>

            <div class="col-4 p-2">
                <img src="{{ asset('img/Image_PlaceHolder.jpg')}}" class="card-img" alt="...">
            </div>

            <div class="col-4 p-2">
                <img src="{{ asset('img/placeholder-square.jpg')}}" class="card-img" alt="...">
            </div>
           
        </div>
    </div>
</div>

@endsection