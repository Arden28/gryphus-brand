<?php

namespace App\Livewire\Product;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Modules\Dashboard\app\Models\Product;

class ProductDetail extends Component
{
    public Product $product;

    public $qty = 1;

    public $similars = [];

    public function mount($product){
        $this->product = $product;
        $this->similars = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)->get();

    }

    public function render()
    {
        return view('livewire.product.product-detail');
    }

    public function addToCart(Product $product){

        Cart::instance('cart')->add($product->id, $product->title, $this->qty, $product->price);
        session()->flash('success', 'Le produit a été ajouté avec succès');

        return redirect(route('cart'));
    }

    public function addToWishlist(Product $product){
        $this->middleware('auth');

        Cart::instance('wishlist')->add($product->id, $product->title, $this->qty, $product->price);
        session()->flash('success', 'Le produit a été ajouté avec succès');

        return redirect(route('wishlist'));
    }
}
