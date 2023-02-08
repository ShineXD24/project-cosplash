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
                            @foreach ($data_arrival as $arrival)
                                <div class="grid-content">
                                    <div class="card border-0" style="width: 20rem;">
                                        <img class="img-arrival" src="img/<?= $arrival['pict'] ?>" alt="pict">
                                        <div class="card-body">
                                            <p class="card-text1"><?= $arrival->category ?></p>
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
                    <div class="text-1"><span class="title1">PAYDAY</span> SALE NOW</div>
                    <div class="text-2">Spend minimal $100 get 30% off voucher code for your next purchase</div>
                    <div class="wrap-text">
                        <div class="text-3">1 June - 10 June 2021</div>
                        <div class="text-4">*Terms & Conditions apply</div>
                    </div>
                    <div class="btn btn-dark">
                        <a class="text-light">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="wrapper">
        <section class="favorit">
            <div class="max-width">
                <div class="favorit-content">
                    <div class="container">
                        <h1 class="text-light">Young’s Favourite</h1>
                        <div class="grid-container">
                                <div class="grid-content">
                                    <div class="card border-0" style="width: 34rem;">
                                        <img class="img-favorit" src="img/trending.png" alt="pict">
                                        <div class="card-body">
                                            <p class="card-text1">Trending on instagram</p>
                                            <p class="card-text2">Explore Now!</p>
                                            <a href="#" class="stretched-link"></a>
                                            {{-- <i class="fa-solid fa-arrow-right"></i> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-content">
                                    <div class="card border-0" style="width: 34rem;">
                                        <img class="img-favorit" src="img/all-under.png" alt="pict">
                                        <div class="card-body">
                                            <p class="card-text1">All Under $40</p>
                                            <p class="card-text2">Explore Now!</p>
                                            <a href="#" class="stretched-link"></a>
                                            {{-- <i class="fa-solid fa-arrow-right"></i> --}}
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Cosplash</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Quick Link</h4>
                    <ul>
                        <li><a href="#">Share Location</a></li>
                        <li><a href="#">Orders Tracking</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">Size Guide</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Terms & conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
