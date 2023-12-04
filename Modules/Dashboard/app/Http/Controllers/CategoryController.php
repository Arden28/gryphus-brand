<?php

namespace Modules\Dashboard\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Modules\Dashboard\app\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('dashboard::shop.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parent_cats=Category::where('is_parent',1)->orderBy('title','ASC')->get();
        return view('dashboard::shop.categories.create', compact('parent_cats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title'=>'string|required',
            'summary'=>'string|nullable',
            'photo'=>'string|nullable',
            'status'=>'required|in:active,inactive',
            'is_parent'=>'nullable|in:1',
            // 'parent_id'=>'nullable|exists:categories,id',
        ]);
        $slug = Str::slug($request->title);
        $category = Category::create([
            'title' => $request->title,
            'slug' => $slug,
            'summary' => $request->summary,
            'parent_id' => $request->parent_id,
            'status' => $request->status,
            'photo' => $request->photo,
        ]);
        // $category->save();

        if($category->save()){
            session()->flash('success','La catégorie à été ajoutée');
        }
        else{
            session()->flash('error','Une erreur est survenue lors de l\'ajout!');
        }
        return redirect()->route('category.index');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('dashboard::shop.categories.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $parent_cats=Category::isParent()->get();
        // $category=Category::findOrFail($id);
        return view('dashboard::shop.categories.edit', compact('parent_cats', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // $category=Category::findOrFail($id);
        $this->validate($request,[
            'title'=>'string|required',
            'summary'=>'string|nullable',
            'photo'=>'string|nullable',
            'status'=>'required|in:active,inactive',
            'is_parent'=>'sometimes|in:1',
            'parent_id'=>'nullable|exists:categories,id',
        ]);
        $data= $request->all();
        $data['is_parent']=$request->input('is_parent',0);
        // return $data;
        $status= $category->fill($data)->save();
        if($status){
            session()->flash('success','La catégorie a été modifiée.');
        }
        else{
            session()->flash('error','Une erreur est survenue lors de la modification, veuillez réessayer !');
        }
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
