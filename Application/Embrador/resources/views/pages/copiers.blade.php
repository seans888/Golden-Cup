@extends('main')

@section('title', '| Copier Machines')
@section('content')
<h1 class="text-center" style="font-weight: bold"> Copiers Machines </h1>
<hr>

<div class="col-md-3 col-sm-6 hero-feature">
        <div class="">
            
        </div>
    </div>

<div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src='/images/kyo3.png' alt="">
            <div class="caption">
                <h3>Kyocera Mitra</h3>
    
                <p>
                    <a href="/kyocera" class="btn btn-primary">View Machines!</a> 
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src="/images/ricoh05.png" alt="">
            <div class="caption">
                <h3>Ricoh</h3>
                <p>
                    <a href="/ricoh" class="btn btn-primary">View Machines!</a> 
                </p>
            </div>
        </div>
    </div>


<div class="col-md-3 col-sm-6 hero-feature">
        <div class="">
            
        </div>
    </div>
@endsection