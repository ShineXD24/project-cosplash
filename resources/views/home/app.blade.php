<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    @include('partial.navbar')

    <div class="wrapper">
        <section class="hero">
            <div class="max-width">
                <div class="hero-content">
                    <div class="container">
                        <div class="text-1">LET’S EXPLORE COSTUME COSPLAY.</div>
                        <div class="text-2">Live for Influential and Innovative fashion!</div>
                        <div class="btn btn-dark">
                            <a class="text-light" href="#">Shop Now</a>
                        </div>
                    </div>
                    <img src="img/hero-img.png" class="img-hero" alt="">
                </div>
            </div>
        </section>

        <section class="arrival">
            <div class="max-width">
                <div class="arrival-content">
                    <div class="container">
                        <h1 class="text-light">NEW ARRIVALS</h1>
                        <div class="grid-container">
                            @foreach ($data_cosplash as $cosplash)
                                <div class="grid-content">
                                    <div class="card border-0" style="width: 20rem;">
                                        <img class="img-arrival" src="img/<?= $cosplash['pict'] ?>" alt="pict">
                                        <div class="card-body">
                                            <p class="card-text1"><?= $cosplash->category ?></p>
                                            <p class="card-text2">Explore Now!</p>
                                            <a href="#" class="stretched-link"></a>
                                            {{-- <i class="fa-solid fa-arrow-right"></i> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="banner">
        <div class="max-width">
            <div class="banner-content">
                <img src="img/banner-img.png" class="img-banner" alt="">
                <div class="container">
                    <div class="text-1">PAYDAY SALE NOW</div>
                    <div class="text-2">Spend minimal $100 get 30% off voucher code for your next purchase</div>
                    <p class="text-3">1 June - 10 June 2021</p>
                    <p class="text-4">*Terms & Conditions apply</p>
                    <div class="btn btn-dark">
                        <a class="text-light">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="wrapper">
        <section class="">
            <p>halo</p>
        </section>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
