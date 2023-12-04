@extends('layouts.master')

@section('title', 'La boutique')

@section('content')
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Type<span>La Boutique</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Acceuil</a></li>
                <li class="breadcrumb-item"><a href="#">La Boutique</a></li>
                <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <livewire:shop />

</main><!-- End .main -->
@endsection
