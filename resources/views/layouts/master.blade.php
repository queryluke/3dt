<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

    <!-- META -->
    <title>ThreeJect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

{{-- $controller and $action are injected in the AppServiceProvider
and are used to route JavaScript in router.js --}}
<body data-controller="{{$controller}}" data-action="{{$action}}">

    @yield('main.content')

    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>