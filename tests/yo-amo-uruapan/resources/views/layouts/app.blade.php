<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">


    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/sweetalert2.all.min.js') }}"></script>
    {{--<script type="text/javascript" src="{{ URL::asset('js/bootstrap-datepicker.min.js') }}"></script>--}}
    {{--<script type="text/javascript" src="{{ URL::asset('js/bootstrap-datepicker.es.min.js') }}"></script>--}}

    {{--<link href="{{ URL::asset('css/sweetalert2.css') }}" rel="stylesheet" />--}}
    <link href="{{ URL::asset('css/bootstrap-datepicker3.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        {{--<a class="navbar-brand" href="#">Navbar</a>--}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @if (Auth::guest())
{{--                    @include(config('laravel-menu.views.bootstrap-items'), ['items' => $MyNavBar->roots()])--}}
                @endif

            </ul>
        </div>
    </nav>



    <div id="app">
        <!-- En esta parte estaba la nav bar de bootstrap  v3 -->
        <div class="col-sm-8 col-sm-offset-2">
            @include('flash::message')
        </div>

        @include('sweet::alert')

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
{{--                        <div>{{ dd($errors) }}</div>--}}
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (Session::has('deleted'))
            <div class="alert alert-warning" role="alert"> Registro borrado, si desea deshacer el cambio <a href="{{ route(Session::get('routeDelete'), [Session::get('deleted')]) }}">Click aqui</a> </div>
        @endif

        @if (Session::has('restored'))
            <div class="alert alert-success" role="alert"> Registro restaurado</div>
        @endif

        @yield('content')
    </div>

    <script>
        var customText = $("<div>", {
                "css"   : {
                    "color"         : "#fff",
                    "font"          : "16pt helvetica",
                    "margin-top"    : "150px"
                },
                "text"  : "Procesando Solicitud..."
            });

        function submitEvent() {
            document.getElementById('iForm').submit();
        }
        $(document).ready(function() {
            $("#flash-overlay-modal").modal();
        });

    </script>

    @yield('javascript')

</body>
</html>


<!--
{{--                {!! $MenuName->asUl( ['class' => 'awesome-ul'] ) !!}--}}
{{--{!! $MyNavBar->asUl(['navbar navbar-light navbar-static-top']) !!}--}}



{{--<nav class="navbar navbar-light navbar-static-top">--}}
{{--<div class="container">--}}
{{--<div class="navbar-header">--}}

{{--<!-- Collapsed Hamburger -->--}}
{{--<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
{{--<span class="sr-only">Toggle Navigation</span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--</button>--}}

{{--<!-- Branding Image -->--}}
{{--<a class="navbar-brand" href="{{ url('/') }}">--}}
{{--{{ config('app.name', 'Laravel') }}--}}
{{--</a>--}}
{{--</div>--}}


{{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
{{--<!-- Left Side Of Navbar -->--}}
{{--<ul class="nav navbar-nav">--}}
{{--&nbsp;--}}
{{--</ul>--}}


        <!-- Right Side Of Navbar -->
{{--<ul class="nav navbar-nav navbar-right">--}}
{{--<!-- Authentication Links -->--}}
{{--@if (Auth::guest())--}}
{{--<li><a href="{{ route('login') }}">Iniciar Sesión</a></li>--}}
{{--<!-- <li><a href="{{ route('register') }}">Register</a></li>-->--}}
{{--@else--}}

{{--@include('templates/layout_workflow')--}}
{{--@include(config('laravel-menu.views.bootstrap-items'), ['items' => $MyNavBar->roots()])--}}

{{--<li class="dropdown">--}}
{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
{{--{{ Auth::user()->name }} <span class="caret"></span>--}}
{{--</a>--}}

{{--<ul class="dropdown-menu" role="menu">--}}
{{--<li>--}}
{{--<a href="{{ route('logout') }}"--}}
{{--onclick="event.preventDefault();--}}
{{--document.getElementById('logout-form').submit();">--}}
{{--Cerrar Sesión--}}
{{--</a>--}}

{{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--{{ csrf_field() }}--}}
{{--</form>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--@endif--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</nav>--}}

