@extends('layouts/header')
@section('content')
    @php
    $price = 193.500
    @endphp


    <section class="content row-cols-xxl-auto d-flex justify-content-center">
        <div class="col-6 d-flex justify-content-center">
            <div class="border-check">
            <i class="car-select-icon fas fa-check"></i>
            </div>
        <div class="c-rec"></div>
        <img class="full-size" src="{{asset('/assets/img/seat-full-size.png')}}" alt="Full-Size-Image">
        <text class="ibiza">IBIZA</text>
        </div>
        <img class="o-s" src="{{asset('/assets/img/other-seat.png')}}" alt="Full-Size-Image">
        <div class="col-2 d-flex">
            <p class="p-range-b"><strong>193.500</strong>'den başlayan <br>fiyatlarla</p>
            <div class="selection">
                    <button id="slct" class="select-rectangle d-flex justify-content-center" onclick="changePrice()">
                        <text class="select">SELECT</text>
                    </button>
            </div>
        </div>




    </section>








@endsection
