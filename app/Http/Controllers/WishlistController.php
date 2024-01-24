<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Modules\Dashboard\app\Models\Product;

class WishlistController extends Controller
{

    public function index(){
        return view('shop.wishlist');
    }

    public function add(Request $request)
    {
        $product = Product::find($request->product_id);
        Cart::instance('wishlist')->add($product->id, $product->title, 1, $product->price);
        session()->flash('success', 'Le produit a été ajouté avec succès');

        return redirect()->route('wishlist');
    }

}
