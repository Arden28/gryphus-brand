@extends('layouts.master')

@section('title', 'Page de paiement')

@section('content')
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Commande<span>La boutique</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Acceuil</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop') }}">la boutique</a></li>
                <li class="breadcrumb-item active" aria-current="page">Votre commande</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <livewire:checkout  />
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection
