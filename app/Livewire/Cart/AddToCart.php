<?php

namespace App\Livewire\Cart;

use Livewire\Component;
use Modules\Dashboard\app\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class AddToCart extends Component
{
    public $product;

    public $qty = 1;
    public $cart_instance;
    public $global_discount;
    public $global_tax;
    public $shipping;
    public $quantity;
    public $check_quantity;
    public $discount_type;
    public $item_discount;
    public $term;
    public $data;


    public function mount($product){
        $this->product = $product;
    }

    public function addToCart(Product $product){



        Cart::store($product->id);
        $cart = Cart::instance('cart');

        $exists = $cart->search(function ($cartItem, $rowId) use ($product) {
            return $cartItem->id == $product->id;
        });

        if ($exists->isNotEmpty()) {
            session()->flash('message', 'Le produit est déjà dans votre panier!');
            return;
        }

        $cart->add([
            'id'      => $product->id,
            'name'    => $product->product_name,
            'qty'     => 1,
            'price'   => $this->calculate($product)['price'],
            'weight'  => 1,
            'description' => $product->product_description,
            'options' => [
                'product_discount'      => 0.00,
                'product_discount_type' => 'fixed',
                'sub_total'             => $this->calculate($product)['sub_total'],
                'code'                  => $product->product_code,
                'stock'                 => $product->product_quantity,
                'unit'                  => $product->product_unit,
                'product_tax'           => $product->product_order_tax >= 0 ? $product->product_order_tax : 0,
                'unit_price'            => $this->calculate($product)['unit_price'],
                'untaxed_amount'            => $this->calculate($product)['untaxed_amount'],
                'term'                  => $this->term,
            ]
        ]);

        $this->check_quantity[$product->id] = $product->product_quantity;
        $this->quantity[$product->id] = 1;
        $this->discount_type[$product->id] = 'fixed';
        $this->item_discount[$product->id] = 0;

    }

    public function render()
    {
        return view('livewire.cart.add-to-cart');
    }
}
