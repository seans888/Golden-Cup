@extends('main')

@section('title', '| Kyocera Mita')
<link rel="stylesheet" href="/css/style.css">
@section('content')
<p><a href="/copiers" class="btn btn-primary"> Back</a></p>
<h1 class="text-center" style="font-weight: bold"> Kyocera Mita </h1>
<hr>





<div class="col-md-4 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src="/images/kyo1.png" alt="">
            <div class="caption">
                <h3>Kyocera-Mita-2030</h3>
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

<div class="col-md-4 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src="/images/kyo2.png" alt="">
            <div class="caption">
                <h3>Kyocera-Mita-2530-3530</h3>
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


<div class="col-md-4 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src="/images/kyo3.png" alt="">
            <div class="caption">
                <h3>Kyocera-Mita-4035-5035</h3>
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

   


@endsection