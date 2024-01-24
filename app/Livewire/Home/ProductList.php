<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Modules\Dashboard\app\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductList extends Component
{

    public function mount(){
        //
    }

    public function render()
    {
        $products = Product::orderBy('id', 'DESC')->take(10)->get();
        return view('livewire.home.product-list', compact('products'));
    }
}
