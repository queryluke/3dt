@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">

                <div class="jumbotron">
                    <h1 class="hero">ThreeJect!</h1>
                </div>

                {!! Form::open(array('url' => '/login')) !!}

                <div class="form-group">
                    {!! Form::label('onyen', 'Onyen') !!}
                    {!! Form::text('onyen', null, array('class'=>'form-control', 'placeholder'=>'onyen')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', array('class'=>'form-control', 'placeholder'=>'password')) !!}
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop