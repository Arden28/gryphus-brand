
<!-- Plugins JS File -->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.hoverIntent.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('assets/js/superfish.min.js')}}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap-input-spinner.js')}}"></script>
<script src="{{ asset('assets/js/jquery.plugin.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js')}}"></script>
<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js')}}"></script>
<script src="{{ asset('assets/js/demos/demo-9.js')}}"></script>

<script>
    paypal.Buttons().render('#paypal-button-container');
    // This function displays Smart Payment Buttons on your web page.
</script>

<!-- Google Map -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDc3LRykbLB-y8MuomRUIY0qH5S6xgBLX4"></script>


<script
    src="https://www.paypal.com/sdk/js?client-id=AQ5HxiJyJQ84Vtku0RD9XEsT8MXyr7jbB5PFaEQzzz8K8929c0iaVqloBlCFuM0rtb8CllCgO3TuX2kv"> // Required.
//  Replace SB_CLIENT_ID with your sandbox client ID.
</script>

@livewireScripts

@yield('scripts')
