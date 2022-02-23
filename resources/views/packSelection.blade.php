@extends("layouts/header")
@section('content')
    <section class="content d-flex justify-content-center">
        <p class="row-cols-md-4 pack-note d-flex">Seçtiğin araca ait özellikler,<br> konforun ve yaşam stilini belirler.</p>
        <div class="box d-flex">
            <button id="pack-box-1" onclick="changeStyle1();">
                <text id="black-text-1">SEAT FREE SYNC PACK <br>EASY JET</text>
            </button>
            <button id="pack-box-2" onclick="changeStyle2();">
                <text id="black-text-2">MAINTENANCE PROGRAM <br>UPDATE</text>
                <div class="pack-border">

                </div>
            </button>
            <button id="pack-box-3" onclick="changeStyle3();">
                <text id="black-text-3">SEAT FREE SYNC PACK <br>EASY JET</text>
            </button>
            <button id="pack-box-4" onclick="changeStyle4()">
                <text id="black-text-4">SEAT FREE SYNC PACK <br>EASY JET</text>
            </button>
            <button id="pack-box-5" onclick="changeStyle5()">
                <text id="black-text-5">SEAT FREE SYNC PACK <br>EASY JET</text>
            </button>
            <button id="pack-box-6" onclick="changeStyle6()">
                <text id="black-text-6">SEAT FREE SYNC PACK<br>EASY JET</text>
            </button>

        </div>
    </section>
@endsection
