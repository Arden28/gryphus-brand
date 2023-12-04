<?php

namespace Modules\Dashboard\app\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Modules\Dashboard\app\Models\PostCategory;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = PostCategory::all();
        return view('dashboard::blog.categories.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title'=>'string|required',
            'status'=>'required|in:active,inactive',
            // 'parent_id'=>'nullable|exists:categories,id',
        ]);
        $slug = Str::slug($request->title);
        $category = PostCategory::create([
            'title' => $request->title,
            'slug' => $slug,
            'status' => $request->status,
        ]);
        // $category->save();

        if($category->save()){
            session()->flash('success',"La catégorie a été ajoutée");
        }
        else{
            session()->flash('error','Une erreur est survenue lors de l\'ajout!');
        }
        return redirect()->route('post-category.index');
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
    public function destroy(PostCategory $category)
    {
        $category->delete();
        return redirect()->route('post-category.index');
    }
}
