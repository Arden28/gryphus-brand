@extends('layouts.master')

@section('title', $product->title)

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup/magnific-popup.css')}}">
@endsection

@section('content')
<main class="main">
    <livewire:product.product-detail :product="$product" />
</main><!-- End .main -->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/superfish.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.elevateZoom.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>
@endsection
