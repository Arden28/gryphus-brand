@extends('layouts.master')

@section('title', 'Ma liste de favoris')

@section('content')
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Liste de souhaits<span>La boutique</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Acceuil</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop') }}">La boutique</a></li>
                <li class="breadcrumb-item active" aria-current="page">Liste de souhaits</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <table class="table table-wishlist table-mobile">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Status du stock</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="product-col">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/products/table/product-1.jpg" alt="Product image">
                                    </a>
                                </figure>

                                <h3 class="product-title">
                                    <a href="#">Beige knitted elastic runner shoes</a>
                                </h3><!-- End .product-title -->
                            </div><!-- End .product -->
                        </td>
                        <td class="price-col">$84.00</td>
                        <td class="stock-col"><span class="in-stock">Disponible</span></td>
                        <td class="action-col">
                            <div class="dropdown">
                            <button class="btn btn-block btn-outline-primary-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-list-alt"></i>Select Options
                            </button>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">First option</a>
                                <a class="dropdown-item" href="#">Another option</a>
                                <a class="dropdown-item" href="#">The best option</a>
                              </div>
                            </div>
                        </td>
                        <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                    </tr>
                    <tr>
                        <td class="product-col">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/products/table/product-2.jpg" alt="Product image">
                                    </a>
                                </figure>

                                <h3 class="product-title">
                                    <a href="#">Blue utility pinafore denim dress</a>
                                </h3><!-- End .product-title -->
                            </div><!-- End .product -->
                        </td>
                        <td class="price-col">$76.00</td>
                        <td class="stock-col"><span class="in-stock">Disponible</span></td>
                        <td class="action-col">
                            <button class="btn btn-block btn-outline-primary-2"><i class="icon-cart-plus"></i>Add to Cart</button>
                        </td>
                        <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                    </tr>
                    <tr>
                        <td class="product-col">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="assets/images/products/table/product-3.jpg" alt="Product image">
                                    </a>
                                </figure>

                                <h3 class="product-title">
                                    <a href="#">Orange saddle lock front chain cross body bag</a>
                                </h3><!-- End .product-title -->
                            </div><!-- End .product -->
                        </td>
                        <td class="price-col">52.00 €</td>
                        <td class="stock-col"><span class="out-of-stock">En rupture</span></td>
                        <td class="action-col">
                            <button class="btn btn-block btn-outline-primary-2 disabled">En rupture</button>
                        </td>
                        <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                    </tr>
                </tbody>
            </table><!-- End .table table-wishlist -->
            <div class="wishlist-share">
                <div class="social-icons social-icons-sm mb-2">
                    <label class="social-label">Partager sur:</label>
                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                    <a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                </div><!-- End .soial-icons -->
            </div><!-- End .wishlist-share -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection
