<form wire:submit.prevent="updateQuantity('{{ $cart_item->rowId }}', '{{ $cart_item->id }}')">
    <div class="cart-product-quantity">
        <input type="number" wire:model.defer="quantity.{{ $cart_item->id }}" class="form-control" value="{{ $cart_item->qty }}" min="1" max="10" step="1" data-decimals="0" required>
    </div><!-- End .cart-product-quantity -->
    {{-- <button type="submit" class="btn btn-primary">
        <i class="bi bi-check"></i>
    </button> --}}
</form>
