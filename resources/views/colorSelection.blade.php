@extends('layouts/header')
@section('content')
    <section class="content row-cols-xxl-auto d-flex justify-content-center">
        <div class="col-6 d-flex justify-content-center">
            <p class="f-info d-flex row-cols-sm-1">Hayalindeki araca dair rengini<br> seç, tarzını hemen yansıt.</p>
            <div class="row justify-content-center d-flex">
                <img class="full-center" src="{{asset('/assets/img/seat-full-size.png')}}" alt="Full-Size-Image">
                <text class="full-ibiza">IBIZA</text>
            </div>
            <div class="color-spheres d-flex justify-content-evenly">
                <div class="sphere-red"></div>
                <div class="sphere-black"></div>
                <div class="sphere-gray"></div>
                <div class="border-color">
                    <i class="color-select-icon fa-xs fas fa-check"></i>
                </div>
            </div>
            <div class="check"></div>
            <div class="check-mark"></div>
            <div class="check-oval"></div>
        </div>
    </section>
@endsection
