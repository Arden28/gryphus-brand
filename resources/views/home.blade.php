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

        </div><!-- End .container -->
    </div><!-- End .bg-lighter -->

    <!-- Home Trends -->
    <livewire:home.product-list />

    <div class="container">
        <hr class="mt-3 mb-4">
    </div><!-- End .container -->

    <div class="video-banner  pt-5 pb-5">
        <div class="container align-items-center">
            <div class="video-banner-box">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <div class="video-box-content">
                            <h4 class="video-banner-title h1"><strong>Gryphus Brand for Team</strong></h4><!-- End .video-banner-title -->
                            <p>
                                Gryphus Brand s'investit désormais pleinement dans la réalisation de vos projets d'équipement. Opter pour les tenues Gryphus Brand pour votre équipe, c'est garantir l'association harmonieuse de la qualité et d'un design élégant, tout en préservant une accessibilité tarifaire.
                            </p>
                            <a href="#" class="btn btn-outline-primary"><span>En savoir +</span><i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .video-box-content -->
                    </div><!-- End .col-md-6 -->
                    <div class="col-md-6">
                        <div class="video-poster">
                            <img src="{{ asset('assets/images/video/poster-3.jpg') }}" alt="poster">

                            <div class="video-poster-content">
                                <a href="https://www.youtube.com/watch?v=vBPgmASQ1A0" class="btn-video btn-iframe"><i class="icon-play"></i></a>
                            </div><!-- End .video-poster-content -->
                        </div><!-- End .video-poster -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .video-banner-box -->
        </div><!-- End .container -->
    </div><!-- End .video-banner bg-image -->

    <!-- Newsletters -->
    <livewire:newsletter />

    <div class="container">

        <h2 class="title mb-3">FAQ</h2><!-- End .title -->

        <div class="row">
            <div class="col-md-12">
                <div class="accordion accordion-rounded accordion-plus" id="accordion-6">
                    <div class="card card-box card-sm bg-white">
                        <div class="card-header" id="heading6-1">
                            <h2 class="card-title">
                                <a role="button" data-toggle="collapse" href="#collapse6-1" aria-expanded="true" aria-controls="collapse6-1">
                                    Cras ornare tristique elit.
                                </a>
                            </h2>
                        </div><!-- End .card-header -->
                        <div id="collapse6-1" class="collapse show" aria-labelledby="heading6-1" data-parent="#accordion-6">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                            </div><!-- End .card-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .card -->

                    <div class="card card-box card-sm bg-white">
                        <div class="card-header" id="heading6-2">
                            <h2 class="card-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse6-2" aria-expanded="false" aria-controls="collapse6-2">
                                    Vivamus vestibulum ntulla
                                </a>
                            </h2>
                        </div><!-- End .card-header -->
                        <div id="collapse6-2" class="collapse" aria-labelledby="heading6-2" data-parent="#accordion-6">
                            <div class="card-body">
                                Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                            </div><!-- End .card-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .card -->

                    <div class="card card-box card-sm bg-white">
                        <div class="card-header" id="heading6-3">
                            <h2 class="card-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse6-3" aria-expanded="false" aria-controls="collapse6-3">
                                    Praesent placerat risus
                                </a>
                            </h2>
                        </div><!-- End .card-header -->
                        <div id="collapse6-3" class="collapse" aria-labelledby="heading6-3" data-parent="#accordion-6">
                            <div class="card-body">
                                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                            </div><!-- End .card-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .card -->
                </div><!-- End .accordion -->
            </div><!-- End .col-md-6 -->
        </div><!-- End .row -->
    </div>

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
