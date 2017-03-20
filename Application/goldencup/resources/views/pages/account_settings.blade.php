@extends('main')
@section('title', ' | Payment Methods')


<link rel="stylesheet" href="/css/style.css">
@section('content')

    <div class="accountsettings">

        Account Settings for {{ Auth::user()->first_name. " ".Auth::user()->last_name }}

        <hr />

    </div>

    @endsection