@extends('main')
@section('title', '| Home')
<link rel="stylesheet" href="/css/style.css">

@section('content')
<!-- Jumbotron Header -->
<div class="row">
<div class="col-md-1 col-sm-1">
</div>
<div id="myCarousel" class="col-md-10 col-sm-10 carousel" data-ride="carousel">
<!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/images/slider-1.jpg" align="middle" width="100%" alt="Slide1">
    </div>

    <div class="item">
      <img src="/images/slider-3.jpg" align="middle" width="100%" alt="Slide2">
    </div>

    <div class="item">
      <img src="/images/slider-4.jpg" align="middle" width="100%" alt="Slide3">
    </div>
  </div>
</div>
<div class="col-md-1 col-sm-1">
</div>
</div>    

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
            <img src='/images/kyo1.png' alt="">
            <div class="caption">
                <h3>Product Name</h3>
                <p>Product Details</p>
                <p>
                @if (Auth::check())
                    <a href="/cart" class="btn btn-primary">Add to cart</a> 
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Add to cart</a> 
                @endif
                    <a href="#" class="btn btn-default">More Info</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src="/images/kyo2.png" alt="">
            <div class="caption">
                <h3>Product Name</h3>
                <p>Product Details</p>
                <p>
                    @if (Auth::check())
                    <a href="/cart" class="btn btn-primary">Add to cart</a> 
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Add to cart</a> 
                @endif
                    <a href="#" class="btn btn-default">More Info</a>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src=images/kyo3.png alt="">
            <div class="caption">
                <h3>Product Name</h3>
                <p>Product Details</p>
                <p>
                    @if (Auth::check())
                    <a href="/cart" class="btn btn-primary">Add to cart</a> 
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Add to cart</a> 
                @endif
                    <a href="#" class="btn btn-default">More Info</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src="images/ricoh01.png"; alt="">
            <div class="caption">
                <h3>Product Name</h3>
                <p>Product Details</p>
                <p>
                    @if (Auth::check())
                    <a href="/cart" class="btn btn-primary">Add to cart</a> 
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Add to cart</a> 
                @endif
                    <a href="#" class="btn btn-default">More Info</a>
                </p>
            </div>
        </div>
    </div>
</div>
    @endsection