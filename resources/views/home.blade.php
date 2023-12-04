@extends('layouts.master')

@section('title', 'Equipements de sport et Streetwear')

@section('content')
<main class="main">
    <!-- Intro-section -->
    <div class="intro-section">
        <!-- Intro-section-slider -->
        <div class="intro-section-slider">
            <div class="container">
                <div class="intro-slider-container slider-container-ratio mb-0">
                    <div class="intro-slider owl-carousel owl-simple owl-light" data-toggle="owl"
                        data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "responsive": {
                                "1200": {
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>
                        <div class="intro-slide">
                            <figure class="slide-image">
                                <picture>
                                    <source media="(max-width: 480px)" srcset="{{ asset('assets/images/demos/demo-9/slider/slide-1-480w.jpg')}}">
                                    <img src="{{ asset('assets/images/demos/demo-9/slider/slide-1.jpg')}}" alt="Image Desc">
                                </picture>
                            </figure><!-- End .slide-image -->

                            <div class="intro-content">
                                <h3 class="intro-subtitle">Nouvelle Collection</h3><!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title text-white">Sportswear & Joggins <br> pour femmes</h1><!-- End .intro-title -->

                                <div class="intro-text text-white">2023</div><!-- End .intro-text -->

                                <a href="category.html" class="btn btn-primary">
                                    <span>Découvrez maintenant</span>
                                </a>
                            </div><!-- End .intro-content -->
                        </div><!-- End .intro-slide -->

                        <div class="intro-slide">
                            <figure class="slide-image">
                                <picture>
                                    <source media="(max-width: 480px)" srcset="{{ asset('assets/images/demos/demo-9/slider/slide-2-480w.jpg')}}">
                                    <img src="{{ asset('assets/images/demos/demo-9/slider/slide-2.jpg')}}" alt="Image Desc">
                                </picture>
                            </figure><!-- End .slide-image -->

                            <div class="intro-content">
                                <h3 class="intro-subtitle">Nouvelle Collection</h3><!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title text-white">Sportswear & Equipements <br> pour hommes</h1><!-- End .intro-title -->

                                <a href="category.html" class="btn btn-primary">
                                    <span>Découvrez maintenant</span>
                                </a>
                            </div><!-- End .intro-content -->
                        </div><!-- End .intro-slide -->

                        <div class="intro-slide">
                            <figure class="slide-image">
                                <picture>
                                    <source media="(max-width: 480px)" srcset="{{ asset('assets/images/demos/demo-9/slider/slide-3-480w.jpg')}}">
                                    <img src="{{ asset('assets/images/demos/demo-9/slider/slide-3.jpg')}}" alt="Image Desc">
                                </picture>
                            </figure><!-- End .slide-image -->

                            <div class="intro-content">
                                <h3 class="intro-subtitle">Offres & Promotions</h3><!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title text-white">Sneakers & Chaussures de Sport</h1><!-- End .intro-title -->

                                <div class="intro-text text-white">à partir de  19,99 €</div><!-- End .intro-text -->

                                <a href="category.html" class="btn btn-primary">
                                    <span>Acheter maintenant</span>
                                </a>
                            </div><!-- End .intro-content -->
                        </div><!-- End .intro-slide -->
                    </div><!-- End .intro-slider owl-carousel owl-simple -->

                    <span class="slider-loader"></span><!-- End .slider-loader -->
                </div><!-- End .intro-slider-container -->
            </div><!-- End .container -->
        </div><!-- End .intro-section-slider -->

        <!-- Icon-boxes-container -->
        <div class="icon-boxes-container pt-0 pb-0">
            <div class="container">
                <div class="owl-carousel owl-simple" data-toggle="owl"
                    data-owl-options='{
                        "nav": false,
                        "dots": false,
                        "margin": 30,
                        "loop": false,
                        "autoplay": true,
                        "autoplayTimeout": 8000,
                        "responsive": {
                            "0": {
                                "items":1
                            },
                            "480": {
                                "items":2
                            },
                            "992": {
                                "items":3
                            },
                            "1200": {
                                "items":4
                            }
                        }
                    }'>
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon">
                                <i class="icon-rocket"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Livraison Offerte</h3><!-- End .icon-box-title -->
                                <p>Dès 65€ d'achat en France</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->

                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon">
                                <i class="icon-rotate-left"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Retours Gratuits</h3><!-- End .icon-box-title -->
                                <p>14jours après réception</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->

                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon">
                                <i class="icon-info-circle"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">20 % de réduction</h3><!-- End .icon-box-title -->
                                <p>Après la création d'un compte</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->

                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon">
                                <i class="icon-life-ring"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Nous prenons en charge</h3><!-- End .icon-box-title -->
                                <p>Services incroyables 24h/7j</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->
        </div><!-- End .icon-boxes-container -->

    </div><!-- End .intro-section -->

    <div class="pt-3 pb-3">
        <div class="container">
            <div class="banner-group">
                <div class="row">

                    <div class="col-sm-4 col-lg-4">
                        <div class="banner banner-overlay">
                            <a href="#">
                                <img src="{{ asset('assets/images/demos/demo-9/banners/banner-2.jpg')}}" alt="Banner">
                            </a>

                            <div class="banner-content">
                                {{-- <h4 class="banner-subtitle text-white"><a href="#">New Arrivals</a></h4><!-- End .banner-subtitle --> --}}
                                <h3 class="banner-title text-white"><a href="#">La GRY ONE</a></h3><!-- End .banner-title -->
                                <a href="#" class="btn btn-outline-white banner-link">Commander Maintenant</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-sm-4 col-lg-4 -->

                    <div class="col-sm-4 col-lg-4">
                        <div class="banner banner-overlay">
                            <a href="#">
                                <img src="{{ asset('assets/images/demos/demo-9/banners/banner-10.jpg')}}" alt="Banner">
                            </a>

                            <div class="banner-content">
                                {{-- <h4 class="banner-subtitle text-white"><a href="#">New Arrivals</a></h4><!-- End .banner-subtitle --> --}}
                                <h3 class="banner-title text-white"><a href="#">Accessoires<br>& Equipements</a></h3><!-- End .banner-title -->
                                <a href="#" class="btn btn-outline-white banner-link">Achetez Maintenant</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-sm-4 col-lg-4 -->

                    <div class="col-sm-4 col-lg-4">
                        <div class="banner banner-overlay">
                            <a href="#">
                                <img src="{{ asset('assets/images/demos/demo-9/banners/banner-3.jpg')}}" alt="Banner">
                            </a>

                            <div class="banner-content">
                                {{-- <h4 class="banner-subtitle text-white"><a href="#">New Arrivals</a></h4><!-- End .banner-subtitle --> --}}
                                <h3 class="banner-title text-white"><a href="#">Maillots de asket</a></h3><!-- End .banner-title -->
                                <a href="#" class="btn btn-outline-white banner-link">Achetez Maintenant</a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-sm-4 col-lg-4 -->

                </div><!-- End .row -->
            </div><!-- End .banner-group -->

            <div class="owl-carousel mt-4 mb-3 owl-simple" data-toggle="owl"
                data-owl-options='{
                    "nav": false,
                    "dots": false,
                    "margin": 30,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "420": {
                            "items":3
                        },
                        "600": {
                            "items":4
                        },
                        "900": {
                            "items":5
                        },
                        "1024": {
                            "items":6
                        }
                    }
                }'>
                <a href="#" class="brand">
                    <img src="{{ asset('assets/images/brands/1.png')}}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('assets/images/brands/2.png')}}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('assets/images/brands/3.png')}}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('assets/images/brands/4.png')}}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('assets/images/brands/5.png')}}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('assets/images/brands/6.png')}}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('assets/images/brands/7.png')}}" alt="Brand Name">
                </a>
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
    </div><!-- End .bg-lighter -->

    <!-- Home Trends -->
    <livewire:home.trends />

    <!-- Home Shoes Trends -->
    <livewire:home.shoes />


    <div class="container">
        <hr class="mt-3 mb-4">
    </div><!-- End .container -->

    <!-- Accessoires & équipements -->
    <livewire:home.accessories />

    <div class="container">
        <hr class="mt-3 mt-xl-1 mb-0">
    </div><!-- End .container -->

    <!-- Newsletters -->
    <livewire:newsletter />

    <!-- Gallerie -->
    <div class="owl-carousel owl-simple" data-toggle="owl"
        data-owl-options='{
            "nav": false,
            "dots": false,
            "items": 6,
            "margin": 0,
            "loop": false,
            "responsive": {
                "0": {
                    "items":2
                },
                "360": {
                    "items":2
                },
                "600": {
                    "items":3
                },
                "992": {
                    "items":4
                },
                "1200": {
                    "items":5
                },
                "1500": {
                    "items":6
                }
            }
        }'>
        <div class="instagram-feed">
            <img src="{{ asset('assets/images/demos/demo-9/instagram/13.jpg')}}" alt="img">

            <div class="instagram-feed-content">
                <a href="#"><i class="icon-heart-o"></i>466</a>
                <a href="#"><i class="icon-comments"></i>65</a>
            </div><!-- End .instagram-feed-content -->
        </div><!-- End .instagram-feed -->

        <div class="instagram-feed">
            <img src="{{ asset('assets/images/demos/demo-9/instagram/8.jpg')}}" alt="img">

            <div class="instagram-feed-content">
                <a href="#"><i class="icon-heart-o"></i>39</a>
                <a href="#"><i class="icon-comments"></i>78</a>
            </div><!-- End .instagram-feed-content -->
        </div><!-- End .instagram-feed -->

        <div class="instagram-feed">
            <img src="{{ asset('assets/images/demos/demo-9/instagram/12.jpg')}}" alt="img">

            <div class="instagram-feed-content">
                <a href="#"><i class="icon-heart-o"></i>691</a>
                <a href="#"><i class="icon-comments"></i>87</a>
            </div><!-- End .instagram-feed-content -->
        </div><!-- End .instagram-feed -->

        <div class="instagram-feed">
            <img src="{{ asset('assets/images/demos/demo-9/instagram/10.jpg')}}" alt="img">

            <div class="instagram-feed-content">
                <a href="#"><i class="icon-heart-o"></i>508</a>
                <a href="#"><i class="icon-comments"></i>124</a>
            </div><!-- End .instagram-feed-content -->
        </div><!-- End .instagram-feed -->

        <div class="instagram-feed">
            <img src="{{ asset('assets/images/demos/demo-9/instagram/11.jpg')}}" alt="img">

            <div class="instagram-feed-content">
                <a href="#"><i class="icon-heart-o"></i>433</a>
                <a href="#"><i class="icon-comments"></i>27</a>
            </div><!-- End .instagram-feed-content -->
        </div><!-- End .instagram-feed -->

        <div class="instagram-feed">
            <img src="{{ asset('assets/images/demos/demo-9/instagram/12.jpg')}}" alt="img">

            <div class="instagram-feed-content">
                <a href="#"><i class="icon-heart-o"></i>122</a>
                <a href="#"><i class="icon-comments"></i>55</a>
            </div><!-- End .instagram-feed-content -->
        </div><!-- End .instagram-feed -->
    </div><!-- End .owl-carousel -->

</main><!-- End .main -->
@endsection
