<div>
    <div class="container featured mt-4 pb-2">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">Chaussures Vedettes</h2><!-- End .title -->
            </div><!-- End .heading-left -->

        <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="featured-women-link" data-toggle="tab" href="#featured-women-tab" role="tab" aria-controls="featured-women-tab" aria-selected="true">Femme</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="featured-men-link" data-toggle="tab" href="#featured-men-tab" role="tab" aria-controls="featured-men-tab" aria-selected="false">Homme</a>
                    </li>
                </ul>
        </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel">
            <div class="tab-pane p-0 fade show active" id="trending-women-tab" role="tabpanel" aria-labelledby="trending-women-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":4,
                                "dots": false
                            }
                        }
                    }'>


                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="{{ asset('assets/images/demos/demo-9/products/product-20.jpg')}}" alt="Product image" class="product-image">
                                <img src="{{ asset('assets/images/demos/demo-9/products/product-20.jpg')}}" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>ajouter à la wishlist</span></a>
                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Aperçu rapide"><span>Aperçu rapide</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"><span>Ajouter au panier</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="product.html">Nike Kyrie Infinity 8</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                72,50 €
                            </div><!-- End .product-price -->

                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 avis )</span>
                            </div><!-- End .rating-container -->
                            <div class="product-nav product-nav-thumbs">
                                <a href="#" class="active">
                                    <img src="{{ asset('assets/images/demos/demo-9/products/product-20-2.jpg')}}" alt="product desc">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/images/demos/demo-9/products/product-20-3.jpg')}}" alt="product desc">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/images/demos/demo-9/products/product-20-4.jpg')}}" alt="product desc">
                                </a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="trending-men-tab" role="tabpanel" aria-labelledby="trending-men-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                        "nav": false,
                        "dots": true,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":4,
                                "dots": false
                            }
                        }
                    }'>

                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->

    </div><!-- End .container -->
</div>
