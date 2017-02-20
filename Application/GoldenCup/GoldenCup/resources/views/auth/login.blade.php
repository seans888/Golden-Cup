@extends('main')

@section('title', '| Login')

@section('content')



    <div class="row">
        <div class="col-md-6 col-md-offset-3">


            <br>
            <h1 class="text-center"> Sign In </h1>
            <br>
            <hr>
            {{ Form::open() }}
            {{ Form::label('email','E-mail:') }}
            {{ Form::email('email', null, array('class'=> 'form-control')) }}


            {{ Form::label('password', 'Password: ') }}
            {{ Form::password('password', array('class' => 'form-control')) }}

            <br>
            {{ Form::label('remember', 'Remember Me') }}
            {{ Form::checkbox('remember') }}

            <br>
            {{ Form::submit('Login', array('class' => 'btn btn-primary btn-block')) }}

            {{ Form::close() }}


            @if (count($errors) > 0)
                <br>

                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error  }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <hr>
        </div>
    </div>


    @endsection