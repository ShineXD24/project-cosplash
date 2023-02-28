@extends('layout.main')
@section('container')
    <link href="{{ asset('css/bootstrap-slider.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap-slider.min.js') }}"></script>

    <style>
        .radio-buttons .form-check {
            margin-bottom: 6px;
        }

        .b {
            border-block-color: #DDDDDD;
            border-radius: 0px;
            color: black;
            font-size: 10px
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- Konten Filter -->
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-dark" style="font-size: 25px">Filter</h1>
                        <br>
                        <form action="">
                            <div class="form-group">
                                {{-- cosplay categories --}}
                                <h4 class="text-dark">Cosplay Categories</h4>
                                <div style="font-size: 10px" class="radio-buttons">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadio1" value="option1" required>
                                        <label class="form-check-label text-dark" for="exampleRadio1">All+</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadio2" value="option2">
                                        <label class="form-check-label text-dark" for="exampleRadio2">Anime</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadio3" value="option3">
                                        <label class="form-check-label text-dark" for="exampleRadio3">Film</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadio4" value="option4">
                                        <label class="form-check-label text-dark" for="exampleRadio4">Game</label>
                                    </div>
                                </div>
                            </div>
                            <div style="border-bottom: 2px solid #f6f6f6; width: 200px;"></div>
                            {{-- gender --}}
                            <br>
                            <div class="button-group">
                                <h4 class="text-dark">Gender</h4>
                                <div class="container">
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <div class="btn-group btn-group-lg my-2" role="group" aria-label="">
                                                <button type="button" class="btn mx-2 b">All+</button>
                                                <button type="button" class="btn mx-2 b">Men</button>
                                                <button type="button" class="btn mx-2 b">Women</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="border-bottom: 2px solid #f6f6f6; width: 200px;"></div>
                            <br>
                            {{-- price --}}

                            <div class="form-group">
                                {{-- size --}}
                                <h4 class="text-dark">Size</h4>
                                <div style="font-size: 10px" class="radio-buttons">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadio1" value="option1" required>
                                        <label class="form-check-label text-dark" for="exampleRadio1">S</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadio2" value="option2">
                                        <label class="form-check-label text-dark" for="exampleRadio2">M</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadio3" value="option3">
                                        <label class="form-check-label text-dark" for="exampleRadio3">L</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadio4" value="option4">
                                        <label class="form-check-label text-dark" for="exampleRadio4">XL</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                            id="exampleRadio5" value="option5">
                                        <label class="form-check-label text-dark" for="exampleRadio5">XXL</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-primary d-flex align-items-center justify-content-center"
                                style="background-color: #5463FF; width: 100%; height: 35px;">
                                <span style="color: white; font-size: 15px">Apply Filter Now</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    @foreach ($data_shop as $shop)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img class="card-img-top" src="img/<?= $shop['pict'] ?>" alt="spiderman">
                                <div class="card-body">
                                    <h5 class="card-title text-dark"><?= $shop->name_char ?></h5>
                                    <p style="color: red" class="card-text"><?= $shop->price ?></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    @endsection
