@extends('layouts.master')

@section('title', 'Notre histoire, nos engagements')

@section('content')
<main class="main">

    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Acceuil</a></li>
                <li class="breadcrumb-item"><a href="#">La marque</a></li>
                <li class="breadcrumb-item active" aria-current="page">A propos de nous</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="container" id="story">
        <div class="page-header page-header-big text-center" style="background-image: url('assets/images/about-header-bg-2.jpg')">
            <h1 class="page-title text-white">Notre marque<span class="text-white">Qui sommes nous ?</span></h1>
        </div><!-- End .page-header -->
    </div><!-- End .container -->

    <div class="page-content pb-0">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h2 class="title">Notre Vision</h2><!-- End .title -->
                    <p>
                        Notre vision est celle d'un monde où chaque amateur de sport, à travers nos produits et notre communauté, ressent l'énergie unique et inspirante du basketball à la française. Nous nous engageons à incarner le style sportif avec élégance, à repousser les limites de l'innovation dans nos équipements de basketball, et à créer des vêtements qui reflètent la fusion parfaite entre la performance athlétique et l'esthétique moderne.
                    </p>
                </div><!-- End .col-lg-6 -->

                <div class="col-lg-6">
                    <h2 class="title">Notre Mission</h2><!-- End .title -->
                    <p>
                        Chez Gryphus Brand, notre mission est d'inspirer et d'équiper la communauté mondiale du basketball avec des produits de qualité supérieure, conçus avec dévouement et style. Nous nous engageons à offrir une expérience authentique, unissant les amateurs de sport par notre passion partagée. En repoussant les limites de l'innovation, nous visons à renforcer la connexion entre le sport, le style de vie et la communauté, tout en laissant une empreinte positive dans l'univers du basketball à chaque dribble et chaque pas.
                    </p>
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->

            <div class="mb-5"></div><!-- End .mb-4 -->
        </div><!-- End .container -->

        <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-3 mb-lg-0">
                        <h2 class="title">Qui sommes nous ?</h2><!-- End .title -->
                        <p class="lead text-primary mb-3">Élégance redéfinie, passion incarnée, l'esprit du basketball à chaque instant <br>in diam. Sed arcu. Cras consequat</p><!-- End .lead text-primary -->
                        <p class="mb-2">
                            Gryphus Brand, fièrement française, incarne la passion du basketball et le style sportif dans chacun de ses produits. Nous sommes bien plus qu'une simple marque, nous sommes une communauté dévouée au basketball et au sportwear.
                        </p>

                        <a href="blog.html" class="btn btn-sm btn-minwidth btn-outline-primary-2">
                            <span>Ils parlent de nous</span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                    </div><!-- End .col-lg-5 -->

                    <div class="col-lg-6 offset-lg-1">
                        <div class="about-images">
                            <img src="assets/images/about/img-1.jpg" alt="" class="about-img-front">
                            <img src="assets/images/about/img-2.jpg" alt="" class="about-img-back">
                        </div><!-- End .about-images -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .bg-light-2 pt-6 pb-6 -->

        <div class="mb-2"></div><!-- End .mb-2 -->

        <div class="about-testimonials bg-light-2 pt-6 pb-6">
            <div class="container">
                <h2 class="title text-center mb-3">Ce que nos clients disent de nous</h2><!-- End .title text-center -->

                <div class="owl-carousel owl-simple owl-testimonials-photo" data-toggle="owl"
                    data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "1200": {
                                "nav": true
                            }
                        }
                    }'>
                    <blockquote class="testimonial text-center">
                        <img src="assets/images/testimonials/user-1.jpg" alt="user">
                        <p>“ Les produits Gryphus Brand ne sont pas seulement des vêtements de sport, mais une véritable déclaration de style et de passion. En tant que fan de basketball, je me sens connectée à une communauté mondiale partageant la même énergie. Les designs sont élégants, les matériaux de haute qualité, et chaque achat me rappelle pourquoi j'adore le basketball à la française. ”</p>
                        <cite>
                            Alexandre, Paris
                            <span>Client</span>
                        </cite>
                    </blockquote><!-- End .testimonial -->

                    <blockquote class="testimonial text-center">
                        <img src="assets/images/testimonials/user-2.jpg" alt="user">
                        <p>“ Gryphus Brand a transformé ma façon de vivre le basketball. Leurs équipements allient parfaitement performance et esthétique, me donnant une confiance inégalée sur le terrain. Être membre de cette communauté, c'est bien plus qu'un simple achat, c'est une expérience. Gryphus Brand, pour moi, incarne le véritable esprit du sport et du style de vie.”</p>

                        <cite>
                            Sophie, Lyon

                            <span>Client</span>
                        </cite>
                    </blockquote><!-- End .testimonial -->
                </div><!-- End .testimonials-slider owl-carousel -->
            </div><!-- End .container -->
        </div><!-- End .bg-light-2 pt-5 pb-6 -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection
