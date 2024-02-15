@section('styles')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
@endsection
<div>
    <div class="checkout">
        <div class="container">
            <div class="checkout-discount">
                <form action="#">
                    <input type="text" class="form-control" required id="checkout-discount-input">
                    <label for="checkout-discount-input" class="text-truncate">Vous avez un coupon? <span>Cliquez ici pour entrer le code</span></label>
                </form>
            </div><!-- End .checkout-discount -->
            <form wire:submit.prevent="processPayment">
                @csrf
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="checkout-title">Détails de facturation</h2><!-- End .checkout-title -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Nom(s) & Prénom(s) *</label>
                                    <input type="text" class="form-control" wire:model="name" required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <label>Adresse *</label>
                            <input type="text" class="form-control"wire:model="address" placeholder="Numéro de rue, quartier" required>

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Ville *</label>
                                    <input type="text" class="form-control"wire:model="city" required>
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label>Pays *</label>
                                    <input type="text" class="form-control"wire:model="country" required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Code postal *</label>
                                    <input type="text" class="form-control"wire:model="zip" required>
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label>Téléphone *</label>
                                    <input type="tel" class="form-control"wire:model="phone" placeholder="ex: +33 ..." required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <label>Adresse email *</label>
                            <input type="email" class="form-control"wire:model="email" required>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"wire:model="create_account" id="checkout-create-acc">
                                <label class="custom-control-label" for="checkout-create-acc">Voulez vous créer un compte?</label>
                            </div><!-- End .custom-checkbox -->

                            @auth()
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"wire:model="ship_other" id="checkout-diff-address">
                                <label class="custom-control-label" for="checkout-diff-address">Souhaitez-vous être livré à une autre addresse ?</label>
                            </div><!-- End .custom-checkbox -->
                            @endauth

                            <label>Note de commande (optionel)</label>
                            <textarea class="form-control" cols="30" rows="4" placeholder="Notes concernant votre commande, par ex. notes spéciales pour la livraison">
                                {{ $note }}
                            </textarea>
                    </div><!-- End .col-lg-9 -->

                    <div class="col-lg-7">
                        <div class="summary">
                            <h3 class="summary-title">Votre Commande</h3><!-- End .summary-title -->

                            <table class="table table-summary">
                                <thead>
                                    <tr>
                                        <th>Produit</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                @php
                                    $cart = \Gloudemans\Shoppingcart\Facades\Cart::instance('cart');
                                    $cart_items = $cart->content();
                                @endphp
                                @if($cart_items->isNotEmpty())
                                <tbody>

                                    @foreach($cart_items as $item)
                                    <tr>
                                        <td><span>{{ $item->qty }}</span> x <a href="#">{{ $item->name }}</a></td>
                                        <td>{{ $item->price }} €</td>
                                    </tr>
                                    @endforeach

                                    <tr class="summary-subtotal">
                                        <td>Sous total:</td>
                                        <td>{{ $cart->subtotal() }} €</td>
                                    </tr><!-- End .summary-subtotal -->
                                    <tr>
                                        <td>Livraison:</td>
                                        <td>Livraison gratuite</td>
                                    </tr>
                                    <tr>
                                        <td>TVA:</td>
                                        <td>{{ $cart->tax() }} €</td>
                                    </tr>
                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>{{ $cart->total() }} €</td>
                                    </tr><!-- End .summary-total -->
                                </tbody>
                                @endif
                            </table><!-- End .table table-summary -->
                        </div><!-- End .summary -->
                        <div class="accordion-summary" id="accordion-payment">

                            <div class="card">
                                <div class="card-header" id="heading-3">
                                    <h2 class="card-title">
                                        <a class="{{ $selectedGateway == 'cod' ? '' : 'collapsed' }}" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3" wire:click="selectGateway('cod')">
                                            Paiement à la livraison
                                        </a>
                                    </h2>
                                </div>
                            </div><!-- End .card -->

                            <div class="card">
                                <div class="card-header" id="heading-4">
                                    <h2 class="card-title">
                                        <a class="{{ $selectedGateway == 'paypal' ? '' : 'collapsed' }}" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4" wire:click="selectGateway('paypal')">
                                            PayPal <small class="float-right paypal-link">C'est quoi Paypal ?</small>
                                        </a>
                                    </h2>
                                </div>
                            </div><!-- End .card -->

                            <div class="card">
                                <div class="card-header" id="heading-5">
                                    <h2 class="card-title">
                                        <a class="{{ $selectedGateway == 'stripe' ? '' : 'collapsed' }}" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5" wire:click="selectGateway('stripe')">
                                            Carte Bancaire (Stripe)
                                            <img src="assets/images/payments-summary.png" alt="payments cards">
                                        </a>
                                    </h2>
                                </div>
                                @if($this->selectedGateway == 'stripe')

                                <form role="form" wire:submit.prevent="processPayment" class="validation"
                                                                 data-cc-on-file="false"
                                                                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                                id="payment-form">
                                @csrf
                                    <div class="card-body" style="height: 350px">
                                        @if (Session::has('success'))
                                            <div class="alert alert-success text-center">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                                <p>{{ Session::get('success') }}</p>
                                            </div>
                                        @endif
                                        <div class="form-group">
                                        <label for="cc-number" class="control-label">Numéro de carte</label>
                                        <input id="cc-number" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="&bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull;" required>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cc-exp-m" class="control-label">Mois d'expiration</label>
                                                <input id="cc-exp-m" type="tel" class="input-lg form-control cc-exp-m" autocomplete="cc-exp-m" placeholder="&bull;&bull;" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cc-exp-y" class="control-label">Année d'expiration</label>
                                                <input id="cc-exp-y" type="tel" class="input-lg form-control cc-exp-y" autocomplete="cc-exp-y" placeholder="&bull;&bull;&bull;&bull;" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="cc-cvc" class="control-label">CVC</label>
                                            <input id="cc-cvc" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="&bull;&bull;&bull;" required>
                                        </div>
                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <label for="numeric" class="control-label">Titulaire de la carte</label>
                                        <input  type="text" class="input-lg form-control">
                                    </div>
                                    </div>
                                </form>
                                @endif
                            </div><!-- End .card -->
                        </div><!-- End .accordion -->

                        <button type="submit" wire:taget="processPayment" class="btn btn-outline-primary-2 btn-order btn-block">
                            <span class="btn-text ">Passer commande</span>
                            <span class="btn-hover-text {{ $selectedGateway ? '' : 'disabled' }}">Procéder au paiement</span>
                        </button>
                    </div>
                </div><!-- End .row -->
            </form>
        </div><!-- End .container -->
    </div><!-- End .checkout -->
</div>
@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>

    <script type="text/javascript">
        $(function() {
            var $form         = $(".validation");
        $('form.validation').bind('submit', function(e) {
            var $form         = $(".validation"),
                inputVal = ['input[type=email]', 'input[type=password]',
                                'input[type=text]', 'input[type=file]',
                                'textarea'].join(', '),
                $inputs       = $form.find('.required').find(inputVal),
                $errorStatus = $form.find('div.error'),
                valid         = true;
                $errorStatus.addClass('hide');

                $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorStatus.removeClass('hide');
                e.preventDefault();
            }
            });

            if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-num').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeHandleResponse);
            }

        });

        function stripeHandleResponse(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
@endsection
