<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Gloudemans\Shoppingcart\Facades\Cart;
use Modules\Dashboard\app\Models\Product;

class ProductCart extends Component
{

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

    public function render()
    {
        $cart_items = Cart::instance('cart')->content();
        return view('livewire.product-cart', [
            'cart_items' => $cart_items
        ]);
    }

    #[On('productSelected')]
    public function productSelected(Product $product) {

        // $product = Product::find($product->id);
        Cart::instance('cart')->add($product->id, $product->title, 1, $product->price);
        session()->flash('success', 'Le produit a été ajouté avec succès');


        $this->check_quantity[$product->id] = $product->product_quantity;
        $this->quantity[$product->id] = 1;
        $this->discount_type[$product->id] = 'fixed';
        $this->item_discount[$product->id] = 0;
    }

    public function removeItem($row_id) {
        Cart::instance('cart')->remove($row_id);
    }

    public function updatedGlobalTax() {
        Cart::instance('cart')->setGlobalTax((integer)$this->global_tax);
    }

    public function updatedGlobalDiscount() {
        Cart::instance('cart')->setGlobalDiscount((integer)$this->global_discount);
    }

    public function updateQuantity($row_id, $quantity) {

        Cart::instance('cart')->update($row_id, );
    }

    public function updatedDiscountType($value, $name) {
        $this->item_discount[$name] = 0;
    }

    public function discountModalRefresh($product_id, $row_id) {
        $this->updateQuantity($row_id, $product_id);
    }

    public function setProductDiscount($row_id, $product_id) {
        $cart_item = Cart::instance('cart')->get($row_id);

        if ($this->discount_type[$product_id] == 'fixed') {
            Cart::instance('cart')
                ->update($row_id, [
                    'price' => ($cart_item->price + $cart_item->options->product_discount) - $this->item_discount[$product_id]
                ]);

            $discount_amount = $this->item_discount[$product_id];

            $this->updateCartOptions($row_id, $product_id, $cart_item, $discount_amount);
        } elseif ($this->discount_type[$product_id] == 'percentage') {
            $discount_amount = ($cart_item->price + $cart_item->options->product_discount) * ($this->item_discount[$product_id] / 100);

            Cart::instance('cart')
                ->update($row_id, [
                    'price' => ($cart_item->price + $cart_item->options->product_discount) - $discount_amount
                ]);

            $this->updateCartOptions($row_id, $product_id, $cart_item, $discount_amount);
        }

        session()->flash('discount_message' . $product_id, 'Discount added to the product!');
    }

    public function setPrice($product){
        if('cart' == 'request-quotation' || 'cart' == 'purchase-order'){
            return $product['product_cost'];
        }else{
            return $product['product_price'];
        }
    }

    public function calculate($product) {
        $price = 0;
        $unit_price = 0;
        $product_tax = 0;
        $untaxed_amount = 0;
        $sub_total = 0;

        if ($product['product_tax_type'] == 1) {
            $price = $this->setPrice($product) + ($this->setPrice($product) * ($product['product_order_tax'])) / 100;
            $unit_price = $this->setPrice($product) / 100;
            $untaxed_amount = $this->setPrice($product) / 100;
            $product_tax = $this->setPrice($product) * ($product['product_order_tax']) / 100;
            $sub_total = $this->setPrice($product) + ($this->setPrice($product) * ($product['product_order_tax'])) / 100;
        } elseif ($product['product_tax_type'] == 2) {
            $unit_price = $this->setPrice($product) / 100;
            $price = $this->setPrice($product) / 100;
            $product_tax = $this->setPrice($product) * ($product['product_order_tax']) / 100;
            $untaxed_amount = $price - $product_tax / 100;
            $sub_total = $this->setPrice($product) / 100;
        } else {
            $price = $this->setPrice($product) / 100;
            $unit_price = $this->setPrice($product) / 100;
            $product_tax = 0.00 / 100;
            $untaxed_amount = 0.00 / 100;
            $sub_total = $this->setPrice($product) / 100;
        }

        return ['price' => $price, 'unit_price' => $unit_price, 'product_tax' => $product_tax, 'untaxed_amount' =>$untaxed_amount, 'sub_total' => $sub_total];
    }

    public function updateCartOptions($row_id, $product_id, $cart_item, $discount_amount) {
        Cart::instance('cart')->update($row_id, ['options' => [
            'description'           => $cart_item->options->product_description,
            'sub_total'             => $cart_item->price * $cart_item->qty,
            'code'                  => $cart_item->options->code,
            'stock'                 => $cart_item->options->stock,
            'unit'                  => $cart_item->options->unit,
            'product_tax'           => $cart_item->options->product_tax,
            'unit_price'            => $cart_item->options->unit_price,
            'product_discount'      => $discount_amount,
            'product_discount_type' => $this->discount_type[$product_id],
            'term'            => $cart_item->options->term,
        ]]);
    }
}
