@extends('layouts.master')

@section('title', 'Mon compte Gryphus')

@section('content')
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Mon Compte<span>La boutique</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Acceuil</a></li>
                {{-- <li class="breadcrumb-item"><a href="#">Shop</a></li> --}}
                <li class="breadcrumb-item active" aria-current="page">Mon Compte</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="dashboard">
            <div class="container">
                <div class="row">
                    <aside class="col-md-4 col-lg-3">
                        <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-dashboard-link" data-toggle="tab" href="#tab-dashboard" role="tab" aria-controls="tab-dashboard" aria-selected="true">Tableau de bord</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-orders-link" data-toggle="tab" href="#tab-orders" role="tab" aria-controls="tab-orders" aria-selected="false">Commandes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-downloads-link" data-toggle="tab" href="#tab-downloads" role="tab" aria-controls="tab-downloads" aria-selected="false">Downloads</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-address-link" data-toggle="tab" href="#tab-address" role="tab" aria-controls="tab-address" aria-selected="false">Adresses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account" role="tab" aria-controls="tab-account" aria-selected="false">Détails du compte</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Me déconnecter</a>
                            </li>
                        </ul>
                    </aside><!-- End .col-lg-3 -->

                    <div class="col-md-8 col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-dashboard" role="tabpanel" aria-labelledby="tab-dashboard-link">
                                <p>Salut <span class="font-weight-normal text-dark">{{ Auth::user()->name }}</span> (Vous n'êtes pas <span class="font-weight-normal text-dark">{{ Auth::user()->name }}</span>? <a href="#">Déconnection</a>)
                                <br>
                                Depuis le tableau de bord de votre compte, vous pouvez consulter vos <a href="#tab-orders" class="tab-trigger-link link-underline">dernières commandes</a>, gérer vos <a href="#tab-address" class="tab-trigger-link">addresses de livraison & facturation</a>, et <a href="#tab-account" class="tab-trigger-link">modifier votre mot de passe et vos informations</a>.</p>
                            </div><!-- .End .tab-pane -->

                            <div class="tab-pane fade" id="tab-orders" role="tabpanel" aria-labelledby="tab-orders-link">
                                <p>Aucune commande n'a été faite pour l'instant.</p>
                                <a href="category.html" class="btn btn-outline-primary-2"><span>Commencer un achat</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- .End .tab-pane -->

                            <div class="tab-pane fade" id="tab-downloads" role="tabpanel" aria-labelledby="tab-downloads-link">
                                <p>Aucun téléchargement dispoible.</p>
                                <a href="category.html" class="btn btn-outline-primary-2"><span>Commencer un achat</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- .End .tab-pane -->

                            <div class="tab-pane fade" id="tab-address" role="tabpanel" aria-labelledby="tab-address-link">
                                <p>Les adresses suivantes seront utilisées par défaut sur la page de paiement.</p>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card card-dashboard">
                                            <div class="card-body">
                                                <h3 class="card-title">Adresse de facturation</h3><!-- End .card-title -->

                                                <p>{{ Auth::user()->name }}<br>
                                                Company<br>
                                                John str<br>
                                                New York, NY 10001<br>
                                                1-234-987-6543<br>
                                                yourmail@koverae.com<br>
                                                <a href="#">Modifier <i class="icon-edit"></i></a></p>
                                            </div><!-- End .card-body -->
                                        </div><!-- End .card-dashboard -->
                                    </div><!-- End .col-lg-6 -->

                                    <div class="col-lg-6">
                                        <div class="card card-dashboard">
                                            <div class="card-body">
                                                <h3 class="card-title">Adresse de livraison</h3><!-- End .card-title -->

                                                <p>Vous n'avez pas encore configuré cette adresse.<br>
                                                <a href="#">Modifier <i class="icon-edit"></i></a></p>
                                            </div><!-- End .card-body -->
                                        </div><!-- End .card-dashboard -->
                                    </div><!-- End .col-lg-6 -->
                                </div><!-- End .row -->
                            </div><!-- .End .tab-pane -->

                            <div class="tab-pane fade" id="tab-account" role="tabpanel" aria-labelledby="tab-account-link">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Prénom(s) & Nom(s) *</label>
                                            <input type="text" class="form-control" required>
                                        </div><!-- End .col-sm-12 -->
                                    </div><!-- End .row -->

                                    <label>Adresse email *</label>
                                    <input type="email" class="form-control" required>

                                    <label>Mot de passe actuel (laissez vide pour laisser inchangé)</label>
                                    <input type="password" class="form-control">

                                    <label>Nouveau mot de passe (laisser vide pour laisser inchangé)</label>
                                    <input type="password" class="form-control">

                                    <label>Confirmer le nouveau mot de passe</label>
                                    <input type="password" class="form-control mb-2">

                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>Sauvegarder</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>
                                </form>
                            </div><!-- .End .tab-pane -->
                        </div>
                    </div><!-- End .col-lg-9 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .dashboard -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection
