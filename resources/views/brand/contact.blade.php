@extends('layouts.master')

@section('title', 'Prenez contact avec nous !')

@section('content')
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
                <li class="breadcrumb-item"><a href="#">La marque</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nous contacter</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->
    <div class="container">
        <div class="page-header page-header-big text-center" style="background-image: url('assets/images/contact-header-bg.jpg')">
            <h1 class="page-title text-white">Nous contacter<span class="text-white">Garder le contact</span></h1>
        </div><!-- End .page-header -->
    </div><!-- End .container -->

    <div class="page-content pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-2 mb-lg-0">
                    <h2 class="title mb-1">Information de contact</h2><!-- End .title mb-2 -->
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="contact-info">
                                <h3>Nos locaux</h3>

                                <ul class="contact-list">
                                    <li>
                                        <i class="icon-map-marker"></i>
                                        70 Washington Square South New York, NY 10012, United States
                                    </li>
                                    <li>
                                        <i class="icon-phone"></i>
                                        <a href="tel:#">+92 423 567</a>
                                    </li>
                                    <li>
                                        <i class="icon-envelope"></i>
                                        <a href="mailto:#">info@Molla.com</a>
                                    </li>
                                </ul><!-- End .contact-list -->
                            </div><!-- End .contact-info -->
                        </div><!-- End .col-sm-7 -->

                        <div class="col-sm-5">
                            <div class="contact-info">
                                <h3>Nos horaires</h3>

                                <ul class="contact-list">
                                    <li>
                                        <i class="icon-clock-o"></i>
                                        <span class="text-dark">Lundi-Samedi</span> <br>08h-17h
                                    </li>
                                    <li>
                                        <i class="icon-calendar"></i>
                                        <span class="text-dark">Dimanche</span> <br>09h-15h
                                    </li>
                                </ul><!-- End .contact-list -->
                            </div><!-- End .contact-info -->
                        </div><!-- End .col-sm-5 -->
                    </div><!-- End .row -->
                </div><!-- End .col-lg-6 -->
                <div class="col-lg-6">
                    <h2 class="title mb-1">Vous avez des questions ?</h2><!-- End .title mb-2 -->
                    <p class="mb-2">Utilisez le formulaire ci-dessous pour entrer en contact avec notre équipe</p>

                    @if(session('success'))
                        <div>{{ session('success') }}</div>
                    @endif

                    @if($errors->any())
                        <div>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.post') }}" method="post" class="contact-form mb-3">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="cname" class="sr-only">Nom(s) & Prénom(s) *</label>
                                <input type="text" class="form-control" id="cname" placeholder="Nom(s) & Prénom(s) *" name="name" value="{{ old('name') }}" required>
                            </div><!-- End .col-sm-6 -->

                            <div class="col-sm-6">
                                <label for="cemail" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="cemail" placeholder="Email *" name="email" value="{{ old('email') }}" required>
                            </div><!-- End .col-sm-6 -->
                        </div><!-- End .row -->

                        <div class="row">
                            <div class="col-sm-6">
                                <label for="cphone" class="sr-only">Téléphone</label>
                                <input type="tel" class="form-control" id="cphone" placeholder="Téléphone *" name="phone" value="{{ old('phone') }}" required>
                            </div><!-- End .col-sm-6 -->

                            <div class="col-sm-6">
                                <label for="csubject" class="sr-only">Subject</label>
                                <input type="text" class="form-control" id="csubject" placeholder="Sujet *" name="subject" value="{{ old('subject') }}" required>
                            </div><!-- End .col-sm-6 -->

                        </div><!-- End .row -->

                        <label for="cmessage" class="sr-only">Message</label>
                        <textarea class="form-control" cols="30" rows="4" id="cmessage" required placeholder="Message *" name="message" required>{{ old('message') }}</textarea>

                        <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                            <span>Envoyer</span>
                            <i class="icon-long-arrow-right"></i>
                        </button>
                    </form><!-- End .contact-form -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->

            <hr class="mt-4 mb-5">

        </div><!-- End .container -->
        <div id="map"></div><!-- End #map -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection
