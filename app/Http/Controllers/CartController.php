<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('shop.cart');
    }

    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $cart = session('cart', []);

        // Add logic to check if the product is already in the cart
        // If it is, update the quantity, otherwise add a new item
        $product = [
            'product_id' => $productId,
            'quantity' => 1, // You can adjust the quantity as needed
            // You might also want to store other product details like name, price, etc.
        ];

        // Assuming product_id is a unique identifier
        $existingProductIndex = array_search($productId, array_column($cart, 'product_id'));

        if ($existingProductIndex !== false) {
            // Product already exists in the cart, update quantity
            $cart[$existingProductIndex]['quantity'] += 1;
        } else {
            // Product is not in the cart, add it
            $cart[] = $product;
        }

        session(['cart' => $cart]);

        return redirect('/cart');
    }

}
