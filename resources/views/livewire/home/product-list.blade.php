<div>

    <div class="pt-6">
        <div class="container">
            <div class="heading heading-flex">
                <div class="heading-left">
                    <h2 class="title">Nos articles</h2><!-- End .title -->
                </div><!-- End .heading-left -->
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
                        @foreach ($products as $product)
                        <div class="product product-7 text-center">
                            <figure class="product-media">
                                <a href="{{ route('product.show', $product->slug) }}">
                                    <img src="{{ url($product->photo)}}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>ajouter à la wishlist</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Aperçu rapide"><span>Aperçu rapide</span></a>
                                </div><!-- End .product-action-vertical -->

                                <form action="{{ route('cart.add') }}" method="post">
                                    @csrf
                                    <div class="product-action">
                                        <input type="hidden" name="product_id" value="{{ $product->id }}"/>
                                        <button type="submit" class="btn-product btn-cart"><span>Ajouter au panier</span></button>
                                    </div><!-- End .product-action -->
                                </form>
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="{{ route('product.show', $product->slug) }}">{{ $product->title }}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    {{ $product->price }} €
                                </div><!-- End .product-price -->

                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( {{ $product->reviews()->count() }} avis )</span>
                                </div><!-- End .rating-container -->
                            <div class="product-nav product-nav-thumbs">
                                <a href="#" class="active">
                                    <img src="{{ asset('assets/images/demos/demo-9/products/product-17.jpg')}}" alt="product desc">
                                </a>
                                <a href="#" class="active">
                                    <img src="{{ asset('assets/images/demos/demo-9/products/product-17-thumb.png')}}" alt="product desc">
                                </a>
                                <a href="#" class="active">
                                    <img src="{{ asset('assets/images/demos/demo-9/products/product-18.jpg')}}" alt="product desc">
                                </a>
                            </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        @endforeach

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
</div>
