@extends('layouts.main')
@section('title', ' | Payment Methods ')

<link rel="stylesheet" href="/css/style.css">
@section('content')

    <div class="payment-container">
        <h1> Choose your payment method below: </h1>

        <hr style="visibility:hidden;"/>

        <div class="round-button">
            <a href="">
                <img src="../images/bankdeposit.png" alt="Bank Deposit" />
            </a>
        </div>
    </div>

@endsection
