@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                @include('job._job_edit_form')
            </div>
        </div>
    </div>
@stop