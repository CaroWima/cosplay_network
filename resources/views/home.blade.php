@extends('layouts.layout')

@section('content')

@include('components.searchbar')

@include('components.home-carousel')

<div class="row d-flex justify-content-center p-3">
    <div class="col-10 offset-md-1 m-3 ">
        <div class="card text-center">
            <div class="card-header p-3">
                <h2>
                   This is a header (cospital and handlers) 
                </h2>
            </div>
            <div class="card-body p-5">
                <p>Lorem ipsum dolor sit amet, 
                    consectetur adipisicing elit. 
                    Numquam explicabo error rem. 
                    Quam quae fugit repellat laudantium. 
                    Voluptatibus officia iure quasi culpa fugiat at optio non consequatur alias, 
                    similique quas.
                </p>
                <div class="d-flex justify-content-around mt-4" id="cosLinks">
                    <a class="btn btn-primary" href="#" role="button">Link</a>
                    <a class="btn btn-primary " href="#" role="button">Link</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row justify-content-center p-3">
    <div class="col-10 offset-md-1 m-3 text-center">
        <h1>This is a header</h1>
        <hr>

        <div class="row no-gutters p-4">
            <div class="col-md-4">
            <img src="{{ asset('img/placeholder-square.jpg')}}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body text-left">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer...</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="row justify-content-center pb-4">
    <div class="col-8 offset-md-2 m-3 text-center">
        <div class="card">
            <div class="card-header p-3">
                <h1>This is a header</h1>
            </div>
            <div class="card-body p-5">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Facere ut obcaecati perferendis voluptas enim non mollitia pariatur natus 
                    explicabo exercitationem rerum tempore iusto consectetur, ducimus, 
                    suscipit ullam omnis, culpa doloribus?</p>
                <form class="form-inline d-flex justify-content-center mt-2">
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