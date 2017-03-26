@extends('layouts.main')

@section('title','| Copier Machines')
@section('content')
    <!-- products listing -->
    <!-- Latest SHirts -->
    <div class="row">
        @forelse($copiers as $copier)
            <div class="col-sm-3 col-md-3 col-lg-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="{{route('cart.addItem',$copier->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{url('images',$copier->image)}}"/>
                        </a>
                    </div>
                    <a href="{{route('home')}}">
                        <h3>
                            {{$copier->name}}
                        </h3>
                    </a>
                    <h5>
                        ${{$copier->price}}

                    </h5>
                    <p>
                        {{$copier->description}}
                    </p>
                </div>
            </div>

        @empty
            <h3>No Copiers</h3>
        @endforelse
    </div>
@endsection