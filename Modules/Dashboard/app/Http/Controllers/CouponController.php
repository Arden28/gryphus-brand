<?php

namespace Modules\Dashboard\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Dashboard\app\Models\Coupon;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupons = Coupon::all();
        return view('dashboard::shop.coupons.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard::shop.coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'start_at'=>'date|required',
            'end_at_at'=>'date|required|after:start_at',
            'code'=>'string|nullable',
            'type'=>'string|nullable',
            'value'=>'numeric|nullable',
            'status'=>'required|in:active,inactive',
        ]);
        $category = Coupon::create([
            'start_at' => $request->start_at,
            'end_at_at' => $request->end_at_at,
            'code' => $request->code,
            'type' => $request->type,
            'value' => $request->value,
            'status' => $request->status,
        ]);
        // $category->save();

        if($category->save()){
            session()->flash('success','Le coupon à été ajouté');
        }
        else{
            session()->flash('error','Une erreur est survenue lors de l\'ajout!');
        }
        return redirect()->route('coupon.index');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('dashboard::shop.coupons.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard::shop.coupons.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return redirect()->route('coupon.index');
    }
}
