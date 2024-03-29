<?php

namespace App\Http\Controllers;

// use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Modules\Dashboard\app\Models\Product;

class CartController extends Controller
{

    public function index(){
        return view('shop.cart');
    }

    public function add(Request $request)
    {
        $product = Product::find($request->product_id);
        Cart::instance('cart')->add($product->id, $product->title, 1, $product->price);
        session()->flash('success', 'Le produit a été ajouté avec succès');

        return redirect()->route('cart');
    }

}
