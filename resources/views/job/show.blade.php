@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <a href="{{ route('job.edit',['id' => $job->id]) }}" class="btn btn-primary pull-right">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <h1>{{ $job->name }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h1>Add Items</h1>
                <p>...</p>
            </div>
        </div>
    </div>
@stop