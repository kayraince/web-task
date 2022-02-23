<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seat Configurator</title>
    <!-- SEO Fields are Neglected for This Project -->
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!-- Scripts -->
    <script type="text/javascript" src="{{asset('/assets/js/main-js.js') }}"></script>
    <script src="{{asset('/assets/js/jquery.js')}}"></script>
    <script src="{{asset('/js/app.js')}}" defer></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/assets/css/main-css.css') }}">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<header>
    <div class="container-md d-flex justify-content-center">
        <div class="oval-shape"></div>
    </div>
    <div class="container-xl justify-content-center d-flex">
        <img class="seat-image" src="{{url('/assets/img/seat-icon.png')}}" alt="Image">
    </div>
    <nav class="d-flex navigation justify-content-center">
        <text class="nav-item justify-content-center @if(Request::is('Select-Car')) active @endif">MODELS</text>
        <text class="nav-item @if(Request::is('Select-Color')) active @endif">COLORS</text>
        <text class="nav-item justify-content-center @if(Request::is('Select-Pack')) active @endif">ACCESSORIES</text>
        <text class="nav-item justify-content-center @if(Request::is('Summary')) active @endif">SUMMARY</text>
    </nav>


</header>
<body>
@yield('content')
</body>
<footer>
    @php
        if(Request::is('/')) $next='CAR' and $go='select-car';
        elseif (Request::is('Select-Car')) $next='COLORS' and $go='select-color';
        elseif(Request::is('Select-Color')) $next='ACCESSORIES' and $go='select-pack';
        elseif(Request::is('Select-Pack')) $next ='SUMMARY' and $go='sum';
        else $next='BUY NOW' and $go='select-car';

        if (Request::is('Summary')) $icon = 'diagonal-arrow fa-2x fas fa-cart-plus';
        else $icon = 'diagonal-arrow fa-2x fas fa-arrow-right';

    if (Request::is('Select-Car')) $css = 'vanish';
    else $css = 'price-info';

    @endphp

    <div class="row d-flex justify-content-center">
    <div class="footer-rectangle mh-100 d-flex">
        <form action={{route($go)}}>

            <button class="action-rectangle" type="submit">

                <text class="colors-2"> {{ $next }} </text>

            </button>
        </form>
        <div class="g-3-rectangle justify-content-center">
            <text class="new">NEW</text>
        </div>
        <div class="line"></div>
        <img class="seat-car" src="{{url("/assets/img/seat-car.png")}}" alt="Image">
        <div class="group-4">
            <div>
                <text class="total">TOTAL</text>
            </div>
            <text id="{{$css}}">193.500</text>
        </div>
        <i class="{{$icon}}"></i>
    </div>
    </div>



</footer>
