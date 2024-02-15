<div>
    <div class="container">
        @if($cart_items->isNotEmpty())
        <div class="row">
            <div class="col-lg-9">
                <table class="table table-cart table-mobile">
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @if($cart_items->isNotEmpty())
                            @foreach($cart_items as $cart_item)
                            <tr>
                                <td class="product-col">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="{{ Modules\Dashboard\app\Models\Product::find($cart_item->id)->photo }}" alt="{{ $cart_item->name }}">
                                            </a>
                                        </figure>

                                        <h3 class="product-title">
                                            <a href="#">{{ $cart_item->name }}</a>
                                        </h3><!-- End .product-title -->
                                    </div><!-- End .product -->
                                </td>
                                <td class="price-col">{{$cart_item->price}} €</td>
                                <td class="quantity-col">
                                    @include('livewire.includes.product-cart-update-quantity')
                                    {{-- <div class="cart-product-quantity">
                                        <input type="number" wire:model.defer="quantity.{{ $cart_item->id }}" class="form-control" value="{{ $cart_item->qty }}" min="1" max="10" step="1" data-decimals="0" required>
                                    </div> --}}
                                </td>
                                <td class="total-col">{{$cart_item->subtotal}} €</td>
                                <td class="remove-col">
                                    <a wire:click.prevent="removeItem('{{ $cart_item->rowId }}')" class=" cursor-pointer">
                                        <i class="icon-close"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table><!-- End .table table-wishlist -->

                <div class="cart-bottom">
                    <div class="cart-discount">
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control" required placeholder="votre coupon">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
                                </div><!-- .End .input-group-append -->
                            </div><!-- End .input-group -->
                        </form>
                    </div><!-- End .cart-discount -->

                    <a href="#" class="btn btn-outline-dark-2"><span>Actualiser</span><i class="icon-refresh"></i></a>
                </div><!-- End .cart-bottom -->
            </div><!-- End .col-lg-9 -->
            <aside class="col-lg-3">
                <div class="summary summary-cart">
                    <h3 class="summary-title">Total du Panier</h3><!-- End .summary-title -->

                    <table class="table table-summary">
                        <tbody>
                            @php
                                $total_with_shipping = Cart::instance('cart')->subtotal()
                            @endphp

                            <tr class="summary-subtotal">
                                <td>Sous total:</td>
                                <td>
                                    (=) {{ $total_with_shipping }} €
                                </td>
                            </tr><!-- End .summary-subtotal -->
                            <tr class="summary-shipping">
                                <td>Livraison:</td>
                                <td>&nbsp;</td>
                            </tr>

                            <tr class="summary-shipping-row">
                                <td>
                                    <div class="custom-control custom-radio">
                                        <input checked type="radio" id="free-shipping" name="shipping" class="custom-control-input" value="free-shipping">
                                        <label class="custom-control-label" for="free-shipping">Livraison gratuite</label>
                                    </div><!-- End .custom-control -->
                                </td>
                                <td>0.00 €</td>
                            </tr><!-- End .summary-shipping-row -->

                            <tr class="summary-shipping-row">
                                <td>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="free-shipping" name="shipping" class="custom-control-input" value="metropolitan">
                                        <label class="custom-control-label" for="free-shipping">Livraison gratuite</label>
                                    </div><!-- End .custom-control -->
                                </td>
                                <td>8.00 €</td>
                            </tr><!-- End .summary-shipping-row -->

                            <tr class="summary-subtotal">
                                <td>TVA (21%):</td>
                                <td>
                                    (=) {{ Cart::instance('cart')->tax() }} €
                                </td>
                            </tr><!-- End .summary-subtotal -->

                            <tr class="summary-total">
                                <td>Total:</td>
                                <td>
                                    (=) {{ Cart::instance('cart')->total() }}€
                                </td>
                            </tr><!-- End .summary-total -->
                        </tbody>
                    </table><!-- End .table table-summary -->

                    <a href="{{ route('checkout') }}" class="btn btn-outline-primary-2 btn-order btn-block">PROCEDER AU PAIEMENT</a>
                </div><!-- End .summary -->

                <a href="{{ route('shop') }}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUER</span><i class="icon-refresh"></i></a>
            </aside><!-- End .col-lg-3 -->

        </div><!-- End .row -->
        @else
        <p>Votre panier est vide, veuiller y ajouter un produit. <a href="{{ route('shop') }}">La Boutique</a></p>
        @endif
    </div><!-- End .container -->
</div>
