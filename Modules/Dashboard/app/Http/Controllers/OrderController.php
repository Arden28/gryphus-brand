<?php

namespace Modules\Dashboard\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Dashboard\app\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=Order::orderBy('id','DESC')->paginate(10);
        return view('dashboard::shop.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard::shop.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('dashboard::shop.orders.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('dashboard::shop.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($order)
    {
        if($order){
            $status=$order->delete();
            if($status){
                session()->flash('success','La commande a bien été supprimée !');
            }
            else{
                session()->flash('error','Une erreur est survenue lors de la suppression.');
            }
            return redirect()->route('order.index');
        }
        else{
            session()->flash('error','Aucune commande n\'a trouvée');
            return redirect()->back();
        }
    }
}
