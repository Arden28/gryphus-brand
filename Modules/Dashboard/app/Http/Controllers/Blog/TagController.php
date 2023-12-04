<?php

namespace Modules\Dashboard\app\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Modules\Dashboard\app\Models\PostCategory;
use Modules\Dashboard\app\Models\PostTag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = PostTag::all();
        return view('dashboard::blog.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard::blog.tags.create');
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
        $tag = PostTag::create([
            'title' => $request->title,
            'slug' => $slug,
            'status' => $request->status,
        ]);
        // $tag->save();

        if($tag->save()){
            session()->flash('success',"L'étiquette a été ajoutée");
        }
        else{
            session()->flash('error','Une erreur est survenue lors de l\'ajout!');
        }
        return redirect()->route('tag.index');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('dashboard::blog.tags.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard::blog.tags.edit');
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
    public function destroy(PostTag $tag)
    {
        $tag->delete();
        return redirect()->route('tags.index');
    }
}
