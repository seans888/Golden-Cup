@extends('layouts.main')
@section('title', ' | Home')

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

    <hr style = "visibility: hidden;">

    <!-- Title -->
    <div class="row" style="display: inline;">
        @forelse($copiers->chunk(4) as $chunk)
            @foreach($chunk as $copier)
                <div class="col-sm-3 col-md-3 col-lg-3 columns">
                    <div class="item-wrapper">
                        <a href="#">
                            <img src="{{url('images',$copier->image)}}"/>
                        </a>
                        <a href="{{route('copiers')}}">
                            <h3>
                                {{$copier->name}}
                            </h3>
                        </a>
                        <h5>
                            &#8369;{{$copier->price}}

                        </h5>
                        <p>
                            {{$copier->description}}
                        </p>

                        <div class="img-wrapper">
                            @if (Auth::check())
                                <a href="{{route('cart.addItem',$copier->id)}}" class="btn btn-primary">
                                    Add to Cart
                                </a>
                            @else
                                <a href="{{ url('login') }}" class="btn btn-primary" > Add to Cart</a>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        @empty
            <h3>No Copier</h3>
        @endforelse
    </div>



@endsection