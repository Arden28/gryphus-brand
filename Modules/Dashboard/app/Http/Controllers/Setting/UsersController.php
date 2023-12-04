<?php

namespace Modules\Dashboard\app\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard::general.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard::general.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'name'=>'string|required|max:30',
            'email'=>'email|required|unique:users',
            'phone'=>'string|required|unique:users',
            'password'=>'string|required',
            'role'=>'required|in:admin,user,editor',
            'status'=>'required|in:active,inactive',
            'photo'=>'nullable|string',
        ]);
        $password = Hash::make($request->password);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $password,
            'role' => $request->role,
            'photo' => $request->photo,
            'status' => $request->status,
        ]);
        // $user->save();

        if($user->save()){
            session()->flash('success',"L'utilisateur a été ajouté !");
        }
        else{
            session()->flash('error','Une erreur est survenue lors de l\'ajout!');
        }
        return redirect()->route('users.index');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('dashboard::general.users.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard::general.users.edit');
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
    public function destroy($id)
    {
        //
    }
}
