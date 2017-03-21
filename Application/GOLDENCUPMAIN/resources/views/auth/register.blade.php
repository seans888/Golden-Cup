@extends('layouts.main')

@section('title', '| Register')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">


            <br>
            <h1 class="text-center"> Register Here!</h1>
            <br>
            <hr>
            {{ Form::open() }}
            {{ Form::label('first_name','First Name:') }}
            {{ Form::text('first_name', null, array('class'=> 'form-control')) }}

            {{ Form::label('last_name', 'Last Name:') }}
            {{ Form::text('last_name',null,array('class'=> 'form-control') ) }}

            {{ Form::label('email', 'E-mail: ') }}
            {{ Form::email('email',null, array('class' => 'form-control')) }}


            {{ Form::label('password', 'Password: ') }}
            {{ Form::password('password', array('class' => 'form-control')) }}

            {{ Form::label('password_confirmation', 'Confirm Password: ') }}
            {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
            <br>
            {{ Form::submit('Register', array('class' => 'btn btn-primary btn-block')) }}

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