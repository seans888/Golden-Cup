@extends('main')
@section('title', '| Home')

@section('content')
<!-- Jumbotron Header -->
<header class="jumbotron hero-spacer">
    <h1>Slider here</h1>
    <p>Slider here</p>
    <p><a class="btn btn-primary btn-large">Details</a>
    </p>
</header>

<hr>

<!-- Title -->
<div class="row">
    <div class="col-lg-12">
        <h3>Products</h3>
    </div>
</div>
<!-- /.row -->

<!-- Page Features -->
<div class="row text-center">

    <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
                <h3>Product Name</h3>
                <p>Product Details</p>
                <p>
                    <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
                <h3>Product Name</h3>
                <p>Product Details</p>
                <p>
                    <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
                <h3>Product Name</h3>
                <p>Product Details</p>
                <p>
                    <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
                <h3>Product Name</h3>
                <p>Product Details</p>
                <p>
                    <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                </p>
            </div>
        </div>
    </div>
</div>
    @endsection