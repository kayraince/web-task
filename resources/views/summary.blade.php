@extends('layouts/header')
@section('content')
    <div class="content row-cols-xl-auto d-flex justify-content-center">
        <div class="content-summary col-6 d-flex justify-content-center">
            <div class="c-rec"></div>
            <img class="full-size" src="{{asset('/assets/img/seat-full-size.png')}}" alt="Full-Size-Image">
            <text class="ibiza">IBIZA</text>
        </div>
        <div class="col-3 d-flex h-25 justify-content-center">
            <text class="model">Model</text>
            <p class="model">Ibiza 1.3 Ecotech DSG</p>
            <div class="horizontal-line-1"></div>
            <text class="color">Color</text>
            <p class="summary-color">Rose Red</p>
            <div class="horizontal-line-2"></div>
            <text class="accessories">Accessories</text>

            <p class="summary-accessories"></p>
            <text>{{'vue'}}</text>
            <div class="horizontal-line-3"></div>
        </div>
    </div>












@endsection





