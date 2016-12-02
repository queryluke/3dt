@extends('layouts.master')

@section('main.content')

    @include('partials._nav')

    @include('partials._alert')

    @yield('content')

@endsection