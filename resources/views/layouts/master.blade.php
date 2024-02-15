<!DOCTYPE html>
<html lang="en">


    <!--  09 Nov 2023 09:57:25 GMT -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title') | Gryphus Brand</title>
        @include('includes.main-css')
    </head>

    <body>
        <div class="page-wrapper">
            <header class="header">

                <div class="header-middle sticky-header">
                    <div class="container">
                        <div class="header-left">
                            <button class="mobile-menu-toggler">
                                <span class="sr-only">Toggle mobile menu</span>
                                <i class="icon-bars"></i>
                            </button>

                            <a href="{{ route('home') }}" class="logo">
                                <img src="{{ asset('assets/images/logo-icon.png')}}" alt="Gryphus Brand Logo" width="50" height="50">
                            </a>

                            <nav class="main-nav">
                                <ul class="menu sf-arrows">

                                    <!-- Men -->
                                    <li class="">
                                        <a href="{{ route('shop') }}" class="sf-with-ul">Vêtements</a>
                                        <ul>
                                            <li><a href="{{ route('shop') }}">Homme</a></li>
                                            <li><a href="{{ route('shop') }}">Femme</a></li>
                                        </ul>
                                    </li>

                                    <!-- Shoes -->
                                    <li>
                                        <a href="{{ route('shop') }}" class="sf-with-ul">
                                            Chaussures
                                        </a>
                                        <ul>
                                            <li><a href="{{ route('product.gry') }}">Gry One</a></li>
                                        </ul>
                                    </li>

                                    <!-- Shoes -->
                                    <li>
                                        <a href="{{ route('shop') }}" class="sf-with-li">
                                            Accessoires
                                        </a>
                                    </li>

                                    <!-- The Brand -->
                                    <li>
                                        <a href="#" class="sf-with-ul">La marque</a>

                                        <ul>
                                            <li><a href="{{ route('about') }}#story">Notre histoire</a></li>
                                            <li><a href="{{ route('about') }}#story">Nos engagements</a></li>
                                            <li><a href="#">Equipements Club</a></li>
                                            <li><a href="#">Nos points de vente</a></li>
                                        </ul>
                                    </li>

                                </ul><!-- End .menu -->
                            </nav><!-- End .main-nav -->
                        </div><!-- End .header-left -->

                        <div class="header-right">
                            {{-- <div class="header-search">
                                <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                                <form action="#" method="get">
                                    <div class="header-search-wrapper">
                                        <label for="q" class="sr-only">Recherchez</label>
                                        <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                                    </div><!-- End .header-search-wrapper -->
                                </form>
                            </div><!-- End .header-search --> --}}

                            @php
                                $cart = \Gloudemans\Shoppingcart\Facades\Cart::instance('cart');
                                $cart_items = $cart->content();
                            @endphp

                            <div class="dropdown cart-dropdown">
                                <a href="{{ route('profile.edit') }}" class="dropdown-toggle">
                                    <i class=" icon-user"></i>
                                </a>
                            </div><!-- End .cart-dropdown -->

                            <div class="dropdown cart-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <i class="icon-shopping-cart"></i>

                                    <span class="cart-count">{{ $cart->count() }}</span>
                                    <span class="cart-txt small" style="font-size: 14px; margin-left: 5px;">{{ $cart->total() }} €</span>
                                </a>

                                @if($cart_items->isNotEmpty())
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-cart-products">

                                        @foreach($cart_items as $item)
                                        <div class="product">
                                            <div class="product-cart-details">
                                                <h4 class="product-title">
                                                    <a href="#">{{ $item->name }}</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">{{ $item->qty }}</span>
                                                    x {{ $item->price }} €
                                                </span>
                                            </div><!-- End .product-cart-details -->

                                            <figure class="product-image-container">
                                                <a href="#" class="product-image">
                                                    <img src="{{ \Modules\Dashboard\app\Models\Product::find($item->id)->photo }}" alt="product">
                                                </a>
                                            </figure>
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        </div><!-- End .product -->
                                        @endforeach

                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price">{{ $cart->total }} €</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="{{ route('cart') }}" class="btn btn-primary">Panier</a>
                                        <a href="{{ route('checkout') }}" class="btn btn-outline-primary-2"><span>Commander</span><i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdown-menu -->
                                @endif


                            </div><!-- End .cart-dropdown -->

                        </div><!-- End .header-right -->
                    </div><!-- End .container -->
                </div><!-- End .header-middle -->
            </header><!-- End .header -->

            @yield('content')

            <footer class="footer footer-2">
                <div class="footer-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6">
                                <div class="widget widget-about">
                                    <img src="{{ asset('assets/images/demos/demo-9/logo-footer-1.png')}}" class="footer-logo" alt="Gryphus Brand" width="195" height="65">
                                    <p>
                                        Gryphus Brand, fièrement française, incarne la passion du basketball et le style sportif dans chacun de ses produits.
                                        Nous sommes bien plus qu'une simple marque, nous sommes une communauté dévouée au basketball et au sportwear.
                                        Explorez notre gamme exceptionnelle d'équipements de basketball et de vêtements de sport, conçus avec amour et dévouement pour les amateurs de sport comme vous.
                                        Rejoignez-nous pour vivre l'esprit du basketball à la française avec Gryphus Brand.
                                    </p>

                                    <div class="widget-about-info">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <span class="widget-about-title">Vous avez des questions ?</span>
                                                <a href="tel:+33782474450">+33 7 82 47 44 50</a>
                                            </div><!-- End .col-sm-6 -->
                                            <div class="col-sm-6 col-md-8">
                                                <span class="widget-about-title">Moyens de paiement</span>
                                                <figure class="footer-payments">
                                                    <img src="{{ asset('assets/images/payments.png')}}" alt="Payment methods" width="272" height="20">
                                                </figure><!-- End .footer-payments -->
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .widget-about-info -->
                                </div><!-- End .widget about-widget -->
                            </div><!-- End .col-sm-12 col-lg-3 -->

                            <div class="col-sm-4 col-lg-2">
                                <div class="widget">
                                    <h4 class="widget-title">Service CLients</h4><!-- End .widget-title -->

                                    <ul class="widget-list">
                                        <li><a href="#">Livraisons</a></li>
                                        <li><a href="#">Termes et conditions</a></li>
                                        <li><a href="#">Politique de confidentialité</a></li>
                                        <li><a href="{{ route('contact') }}">Contactez-nous</a></li>
                                    </ul><!-- End .widget-list -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-4 col-lg-3 -->

                            <div class="col-sm-4 col-lg-2">
                                <div class="widget">
                                    <h4 class="widget-title">Mon Compte</h4><!-- End .widget-title -->

                                    <ul class="widget-list">
                                        <li><a href="#signin-modal">Se connecter</a></li>
                                        <li><a href="{{ route('cart') }}">Mon panier</a></li>
                                    </ul><!-- End .widget-list -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-64 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .footer-middle -->

                <div class="footer-bottom">
                    <div class="container">
                        <p class="footer-copyright">Copyright © 2024 <strong>Gryphus Brand</strong>. Tous droits réservés.</p><!-- End .footer-copyright -->
                        <ul class="footer-menu">
                            <li><a href="{{ route('brand.legal') }}">Conditions d'utilisation</a></li>
                            <li><a href="{{ route('brand.legal') }}">Politique de confidentialité</a></li>
                        </ul><!-- End .footer-menu -->

                        <div class="social-icons social-icons-color">
                            <span class="social-label">Réseaux Sociaux</span>
                            <a href="https://www.facebook.com/GryphusBrand" class="social-icon social-facebook text-muted" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                            <a href="https://twitter.com/GryphusBrand" class="social-icon social-twitter text-muted" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                            <a href="https://www.instagram.com/gryphusbrand" class="social-icon social-instagram text-muted" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCulMKPO82Hln25y4Mw7eP-A" class="social-icon social-youtube text-muted" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                        </div><!-- End .soial-icons -->
                    </div><!-- End .container -->
                </div><!-- End .footer-bottom -->
            </footer><!-- End .footer -->

        </div><!-- End .page-wrapper -->
        <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

        <!-- Mobile Menu -->
        <!-- Mobile Menu -->
        <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

        <div class="mobile-menu-container">
            <div class="mobile-menu-wrapper">
                <span class="mobile-menu-close"><i class="icon-close"></i></span>

                <form action="#" method="get" class="mobile-search">
                    <label for="mobile-search" class="sr-only">Recherchez</label>
                    <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Tapez le nom du produit..." required>
                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                </form>

                <nav class="mobile-nav">
                    <ul class="mobile-menu">
                        <li class="active">
                            <a href="{{ route('shop') }}">Vêtements</a>
                            <ul>
                                <li>
                                    <a href="{{ route('shop') }}" class="sf-with-ul">Homme</a>
                                </li>
                                <li>
                                    <a href="{{ route('shop') }}" class="sf-with-ul">Femme</a>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="{{ route('shop') }}">Chaussures</a>
                            <ul>
                                <li>
                                    <a href="{{ route('product.gry') }}" class="sf-with-ul">Gry One</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">La Marque</a>

                            <ul>
                                <li><a href="{{ route('about') }}#story">Notre histoire</a></li>
                                <li><a href="{{ route('about') }}">Nos engagements</a></li>
                                <li><a href="{{ route('about') }}#partners">Nos collabs</a></li>
                                <li><a href="{{ route('about') }}">Nos points de vente</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- End .mobile-nav -->

                <div class="social-icons social-icons-color">
                    <a href="https://www.facebook.com/GryphusBrand" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                    <a href="https://twitter.com/GryphusBrand" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                    <a href="https://www.instagram.com/gryphusbrand" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCulMKPO82Hln25y4Mw7eP-A" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                </div><!-- End .social-icons -->
            </div><!-- End .mobile-menu-wrapper -->
        </div><!-- End .mobile-menu-container -->
        <!-- End Mobile Menu -->

        @include('auth.modals.login')

        <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row no-gutters bg-white newsletter-popup-content">
                        <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                            <div class="banner-content text-center">
                                <img src="{{ asset('assets/images/popup/newsletter/logo-1.png')}}" class="logo" alt="Gryphus Brand" width="100" height="30">
                                <h2 class="banner-title">Obtenez <span>25<light>%</light></span> de réduction</h2>
                                <p>
                                    Abonnez-vous à la newsletter <strong>Gryphus Brand</strong> pour recevoir des mises à jour en temps opportun de vos produits préférés.
                                </p>
                                <form action="#">
                                    <div class="input-group input-group-round">
                                        <input type="email" class="form-control form-control-white" placeholder="Votre adresse email" aria-label="Email Adress" required>
                                        <div class="input-group-append">
                                            <button class="btn" type="submit"><span>Rejoindre</span></button>
                                        </div><!-- .End .input-group-append -->
                                    </div><!-- .End .input-group -->
                                </form>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                    <label class="custom-control-label" for="register-policy-2">Ne plus afficher</label>
                                </div><!-- End .custom-checkbox -->
                            </div>
                        </div>
                        <div class="col-xl-2-5col col-lg-5 ">
                            <img src="{{ asset('assets/images/popup/newsletter/img-2.jpg')}}" class="newsletter-img" alt="newsletter">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @include('includes.main-js')
    </body>


    <!--  09 Nov 2023 09:57:25 GMT -->
</html>
