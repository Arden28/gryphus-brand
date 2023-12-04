<?php

namespace Modules\Dashboard\app\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Modules\Dashboard\app\Models\Post;
use Modules\Dashboard\app\Models\PostCategory;
use Modules\Dashboard\app\Models\PostTag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = PostCategory::all();
        $posts = Post::all();
        return view('dashboard::blog.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = PostCategory::all();
        $tags = PostTag::all();
        $authors = User::all();
        return view('dashboard::blog.posts.create', compact('categories', 'tags', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'string|required',
            'quote'=>'string|nullable',
            'summary'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'string|nullable',
            'tags'=>'nullable',
            'added_by'=>'nullable',
            'post_cat_id'=>'required',
            'status'=>'required|in:active,inactive'
        ]);

        $slug = Str::slug($request->title);

        $tags = array();

        if($request->tags){
            $tags = implode(',',$request->tags);
        }
        else{
            $tags='';
        }

        $post = Post::create([
            'title' => $request->title,
            'slug' => $slug,
            'quote' => $request->quote,
            'summary' => $request->summary,
            'description' => $request->description,
            'photo' => $request->photo,
            'tags' => $tags,
            'added_by' => $request->added_by,
            'post_cat_id' => $request->post_cat_id,
            'status' => $request->status,
        ]);

        if($post->save()){
            session()->flash('success',"L'article a été ajouté");
        }
        else{
            session()->flash('error','Une erreur est survenue lors de l\'ajout!');
        }
        return redirect()->route('post.index');

    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('dashboard::blog.posts.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('dashboard::blog.posts.edit');
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
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
