<div>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="toolbox">
                        <div class="toolbox-left">
                            <div class="toolbox-info">
                                Produits  <span>{{ $products->firstItem() }}-{{ $products->lastItem() }}</span> sur {{ $products->total() }}
                            </div><!-- End .toolbox-info -->
                        </div><!-- End .toolbox-left -->
                    </div><!-- End .toolbox -->

                    <div class="products mb-3">

                        @foreach ($products as $product)
                        <div class="product product-list">
                            <div class="row">

                                <div class="col-6 col-lg-3">
                                    <figure class="product-media">
                                        @if($product->condition == 'hot')
                                        <span class="product-label label-new">Tendance</span>
                                        @elseif($product->condition == 'new')
                                        <span class="product-label label-new">Nouveau</span>
                                        @else
                                        <span class="product-label label-warning">Nouveau</span>
                                        @endif
                                        <a href="{{ route('product.show', $product->slug) }}">
                                            <img src="{{ $product->photo }}" alt="{{ $product->title }}" class="product-image">
                                        </a>
                                    </figure><!-- End .product-media -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-6 col-lg-3 order-lg-last">
                                    <div class="product-list-action">
                                        <div class="product-price">
                                            {{ $product->price }} €
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            @if($product->review >= 1)
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            @endif
                                            <span class="ratings-text">( {{ count($product->reviews) }} Avis )</span>
                                        </div><!-- End .rating-container -->

                                        <!--
                                        <div class="product-action">
                                            <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>aperçu rapide</span></a>
                                        </div> End .product-action -->

                                        <form action="{{ route('cart.add') }}" method="post">
                                            @csrf
                                            <div class="product-action">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}"/>
                                                <button type="submit" class="btn-product btn-cart"><span>Ajouter au panier</span></button>
                                            </div><!-- End .product-action -->
                                        </form>
                                    </div><!-- End .product-list-action -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-lg-6">
                                    <div class="product-body product-action-inner">
                                        <a href="#" class="btn-product btn-wishlist" title="Ajouter aux favoris"><span>ajouter aux favoris</span></a>
                                        <div class="product-cat">
                                            {{-- <a href="#">Women</a> --}}
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="{{ route('product.show', $product->slug) }}">{{ $product->title }}</a></h3><!-- End .product-title -->

                                        <div class="product-content">
                                            <p>{{ $product->summary }} </p>
                                        </div><!-- End .product-content -->

                                        <div class="product-nav product-nav-thumbs">
                                            <a href="#" class="active">
                                                <img src="{{ $product->photo }}" alt="{{ $product->title }}">
                                            </a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .col-lg-6 -->

                            </div><!-- End .row -->
                        </div><!-- End .product -->
                        @endforeach


                    </div><!-- End .products -->

                    <nav aria-label="Page navigation">
                        {{ $products->links() }}
                        {{-- <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Précédent
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item-total">of 6</li>
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    Suivant <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul> --}}
                    </nav>
                </div><!-- End .col-lg-9 -->

                <aside class="col-lg-3 order-lg-first">
                    <div class="sidebar sidebar-shop">
                        <div class="widget widget-clean">
                            <label>Filtres:</label>
                            <a href="#" class="sidebar-filter-clear">Tout annuler</a>
                        </div><!-- End .widget widget-clean -->

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                                    Catégories
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-1">
                                <div class="widget-body">
                                    <div class="filter-items filter-items-count">

                                        @foreach($categories as $category)
                                        <div class="filter-item">
                                            <div class=" cursor-pointer">
                                                <span>
                                                    {{ $category->title }}
                                                </span>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->

                    </div><!-- End .sidebar sidebar-shop -->
                </aside><!-- End .col-lg-3 -->

            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</div>
