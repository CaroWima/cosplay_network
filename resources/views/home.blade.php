@extends('layouts.layout')

@section('content')

<!--include('components.searchbar')-->

<div class="row d-flex mx-n4" id="eventsBanner">
    <img class="" src="{{ asset('img/ooooop.jpg') }}">
    <h1 class="d-inline"></h1>
</div>

<div class="row d-flex justify-content-center p-3">
    <div class="col-10 offset-md-1 m-5 ">
        <div class="card text-center">
            <div class="card-header p-3">
                <h2>
                   Got it handled? 
                </h2>
            </div>

            <div class="card-body p-5">
                <p>
                    We would like to introduce you to the not so new, 
                    but very important concept of cosplay handlers, 
                    how they can shape the cosplay community and con-experience,
                    as well as open up great opportunities for friendships and connections.
                    Did we get your attention? Follow the links below more information.
                    <br>
                    Happy reading!
                </p>
                <div class="d-flex justify-content-around mt-4" id="cosLinks">
                    <a class="btn btn-primary" href="https://ramunejade.tumblr.com/post/61746588868/handlers-why-cosplayers-need-them" target="_blank" rel="noreferrer noopener" role="button">
                        Post by Ramunejade
                    </a>
                    <a class="btn btn-primary" href="http://www.hopesandfears.com/hopes/now/pop-stuff/216675-cosplay-handlers-the-unsung-heroes-of-comic-con" target="_blank" rel="noreferrer noopener" role="button">
                        Comic Con Heroes
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row justify-content-center p-3">
    <div class="col-10 offset-md-1 m-3 text-center">
        <h2>One day I will contain a featured article, you'll see!</h2>
        <hr>

        <div class="row no-gutters p-4">
            <div class="col-md-4">
            <img src="{{ asset('img/group.jpg')}}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body text-left">
                    <h5 class="card-title">Arbitrary article title</h5>
                    <p class="card-text">
                        Won't resent
                        Won't despair
                        Old and bent
                        I won't care
                        I'll have spent one day
                        Out there</p>
                    <p class="card-text"><small class="text-muted">Last updated at some point, I'm sure</small></p>
                </div>
            </div>
            
        </div>
    </div>
</div>

<hr>

<div class="row justify-content-center py-4">
    <div class="col-8 offset-md-2 m-3 text-center">
        <div class="card">
            <div class="card-header p-3">
                <h2>News & Updates</h2>
            </div>
            <div class="card-body p-5">
                <p>This page is currently still under construction.
                    If you are interested on updates about the progression of this project,
                    consider subscribing to our Newsletter and stay tuned!
                </p>
                <form class="form-inline d-flex justify-content-center mt-4">
                    <div class="input-group input-group-md">
                            <input class="form-control" type="text" placeholder="Subscribe" aria-label="Subscribe to the newsletter">
                            <div class="input-group-append">
                                <button class=" btn btn-info fas fa-at"></button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





@endsection