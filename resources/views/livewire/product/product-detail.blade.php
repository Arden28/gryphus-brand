<div>
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                <li class="breadcrumb-item"><a href="{{ route('shop') }}">La Boutique</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->title }}</li>
            </ol>

            <nav class="product-pager ml-auto" aria-label="Product">
                <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">
                    <i class="icon-angle-left"></i>
                    <span>Pre</span>
                </a>

                <a class="product-pager-link product-pager-next" href="#" aria-label="Next" tabindex="-1">
                    <span>Suiv</span>
                    <i class="icon-angle-right"></i>
                </a>
            </nav><!-- End .pager-nav -->
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="product-details-top mb-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-gallery product-gallery-vertical">
                            <div class="row">
                                <figure class="product-main-image">
                                    <img id="product-zoom" src="{{ asset('assets/images/products/single/centered/1.jpg')}}" data-zoom-image="{{ asset('assets/images/products/single/centered/1-big.jpg')}}" alt="product image">

                                    <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                        <i class="icon-arrows"></i>
                                    </a>
                                </figure><!-- End .product-main-image -->

                                <div id="product-zoom-gallery" class="product-image-gallery">
                                    <a class="product-gallery-item active" href="#" data-image="{{ asset('assets/images/products/single/centered/1.jpg')}}" data-zoom-image="{{ asset('assets/images/products/single/centered/1-big.jpg')}}">
                                        <img src="{{ asset('assets/images/products/single/centered/1-small.jpg')}}" alt="product side">
                                    </a>

                                    <a class="product-gallery-item" href="#" data-image="{{ asset('assets/images/products/single/centered/2.jpg')}}" data-zoom-image="{{ asset('assets/images/products/single/centered/2-big.jpg')}}">
                                        <img src="{{ asset('assets/images/products/single/centered/2-small.jpg')}}" alt="product cross">
                                    </a>

                                    <a class="product-gallery-item" href="#" data-image="{{ asset('assets/images/products/single/centered/3.jpg')}}" data-zoom-image="{{ asset('assets/images/products/single/centered/3-big.jpg')}}">
                                        <img src="{{ asset('assets/images/products/single/centered/3-small.jpg')}}" alt="product with model">
                                    </a>

                                    <a class="product-gallery-item" href="#" data-image="{{ asset('assets/images/products/single/centered/4.jpg')}}" data-zoom-image="{{ asset('assets/images/products/single/centered/4-big.jpg')}}">
                                        <img src="{{ asset('assets/images/products/single/centered/4-small.jpg')}}" alt="product back">
                                    </a>
                                </div><!-- End .product-image-gallery -->
                            </div><!-- End .row -->
                        </div><!-- End .product-gallery -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="product-details product-details-centered">
                            <h1 class="product-title">{{ $product->title }}</h1><!-- End .product-title -->

                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <a class="ratings-text" href="#product-review-link" id="review-link">( {{ count($product->reviews) }} Avis )</a>
                            </div><!-- End .rating-container -->

                            <div class="product-price">
                                {{ $product->price }} €
                            </div><!-- End .product-price -->

                            <div class="product-content">
                                <p>
                                    {!! $product->summary !!}
                                </p>
                            </div><!-- End .product-content -->

                            <div class="details-filter-row details-row-size">
                                <label>Couleur:</label>

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #cc9966;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .details-filter-row -->

                            <div class="details-filter-row details-row-size">
                                <label for="size">Taille:</label>
                                <div class="select-custom">
                                    <select name="size" id="size" class="form-control">
                                        <option value="xs">XS</option>
                                        <option value="s">S</option>
                                        <option value="m">M</option>
                                        <option value="l">L</option>
                                        <option value="xl">XL</option>
                                    </select>
                                </div><!-- End .select-custom -->

                                {{-- <a href="#" class="size-guide"><i class="icon-th-list"></i>size guide</a> --}}
                            </div><!-- End .details-filter-row -->

                            <div class="product-details-action">
                                <form wire:submit="addToCart({{ $product->id }})">
                                <div class="details-action-col">
                                    <div class="product-details-quantity">
                                        <input type="text" class="form-control" wire:model="qty" min="1" max="10" step="1" data-decimals="0" required>
                                    </div><!-- End .product-details-quantity -->
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="btn btn-product btn-cart"><span>Ajouter</span></button>
                                </div><!-- End .details-action-col -->
                                </form>
                                <div id="paypal-button-container"></div>

                                <div class="details-action-wrapper">
                                    <a href="#" class="btn-product btn-wishlist" title="Ajouter à ma Wishlist"><span>Favoris</span></a>
                                    <a href="#" class="btn-product btn-compare" title="Comparer"><span>Comparer</span></a>
                                </div><!-- End .details-action-wrapper -->
                            </div><!-- End .product-details-action -->

                            <div class="product-details-footer">
                                <div class="product-cat">
                                    <span>Catégorie:</span>
                                    <a href="{{route('shop')}}">{{ $product->category->title }}</a>,
                                    @if($product->category->child)
                                    @foreach ($product->category->child as $child_cat)
                                        <a href="#">{{ $child_cat->title }}</a>,
                                    @endforeach
                                    @endif
                                </div><!-- End .product-cat -->

                                <div class="social-icons social-icons-sm">
                                    <span class="social-label">Partager:</span>
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                </div>
                            </div><!-- End .product-details-footer -->
                        </div><!-- End .product-details -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .product-details-top -->

            <div class="product-details-tab">
                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Livraisons & Retours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Avis ({{ count($product->reviews) }})</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                        <div class="product-desc-content">
                            <h3>Fiche Produit</h3>
                            {!! $product->description !!}
                        </div><!-- End .product-desc-content -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                        <div class="product-desc-content">
                            <h3>Livraisons & Retours</h3>
                            <p>Nous livrons dans pluieurs pays à travers le monde. Pour plus de détails sur les options de livraison que nous proposons, veuillez consulter notre <a href="#">Politique de livraison</a><br>
                                Nous espérons que vous apprécierez chaque achat, mais si jamais vous devez retourner un article, vous pouvez le faire dans le mois suivant sa réception. Pour plus de détails sur la façon d'effectuer un retour, veuillez consulter notre <a href="#">Politique de retours</a></p>
                        </div><!-- End .product-desc-content -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                        <div class="Avis">
                            <h3>Avis ({{ count($product->reviews) }})</h3>

                            @if(count($product->reviews) >= 1)
                            @foreach ($product->reviews as $review )
                            <div class="review">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <h4><a href="#">{{ $review->user->name }}</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <span class="review-date">Il y'a {{ \Carbon\Carbon::make($review->create_at)->diffForHumans() }}</span>
                                    </div><!-- End .col -->
                                    <div class="col">
                                        <div class="review-content">
                                            <p>{{ $review->review }}</p>
                                        </div><!-- End .review-content -->

                                        <div class="review-action">
                                            <a href="#"><i class="icon-thumbs-up"></i>Utile (2)</a>
                                            <a href="#"><i class="icon-thumbs-down"></i>Non utile (0)</a>
                                        </div><!-- End .review-action -->
                                    </div><!-- End .col-auto -->
                                </div><!-- End .row -->
                            </div><!-- End .review -->
                            @endforeach

                            @else
                            <p>Aucun n'avis pour le moment</p>
                            @endif

                        </div><!-- End .Avis -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .product-details-tab -->

            @if($similars->count() >= 1)
            <h2 class="title text-center mb-4">Produits similaires</h2><!-- End .title text-center -->
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                data-owl-options='{
                    "nav": false,
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":1
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
                            "nav": true,
                            "dots": false
                        }
                    }
                }'>
                @foreach ($similars as $sim)
                <div class="product product-7 text-center">
                    <figure class="product-media">
                        <span class="product-label label-new">New</span>
                        <a href="{{ route('product.show', $sim->slug) }}">
                            <img src="{{ asset('assets/images/products/product-4.jpg')}}" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="{{ route('wishlist.add') }}" class="btn-product-icon btn-wishlist btn-expandable"><span>Ajouter</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="{{ route('cart.add') }}" class="btn-product btn-cart"><span>Ajouter au panier</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">{{ $sim->category->title }}</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="{{ route('product.show', $sim->slug) }}">{{ $sim->title }}</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            {{ $sim->price }} €
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( {{ count($product->reviews) }} Avis )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #cc9966;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #806b3e;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                @endforeach


            </div><!-- End .owl-carousel -->
            @endif

        </div><!-- End .container -->
    </div><!-- End .page-content -->
</div>
