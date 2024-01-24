<?php

namespace App\Http\Middleware;

use Closure;
use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Cart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $cart_items = FacadesCart::instance('cart')->content();

        if(!$cart_items->isNotEmpty()){
            return redirect()->route('shop');
        }
        return $next($request);
    }
}
