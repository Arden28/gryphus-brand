<?php

namespace Modules\Dashboard\app\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Dashboard\app\Models\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::first();
        return view('dashboard::general.settings.index', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        $this->validate($request,[
            'photo'=>'nullable',
            'logo'=>'nullable',
            'address'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required|string',
            'short_des'=>'required|string',
            'description'=>'required|string',
        ]);

        $setting->update([
            'photo' => $request->photo,
            'logo' => $request->logo,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'short_des' => $request->short_des,
            'description' => $request->description,
        ]);

        // if($setting->save()){
        //     session()->flash('success',"Les paramètres ont été mis à jours !");
        // }
        // else{
        //     session()->flash('error','Une erreur est survenue lors de la sauvegarde!');
        // }
        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
