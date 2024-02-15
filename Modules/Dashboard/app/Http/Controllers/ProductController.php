<?php

namespace Modules\Dashboard\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Modules\Dashboard\app\Models\Product;
use Modules\Dashboard\app\Models\Category;
use Modules\Dashboard\app\Models\ProductReview;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('dashboard::shop.products.index', compact('products'));
    }

    public function gryOne()
    {
        return view('gry-one');
    }

    /**
     * Display a listing of the resource.
     */
    public function reviewIndex()
    {
        $reviews = ProductReview::all();
        return view('dashboard::shop.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::isParent()->get();
        return view('dashboard::shop.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'string|required',
            'summary'=>'string|required',
            'description'=>'string|nullable',
            'photos'=>'required',
            'size'=>'nullable',
            'stock'=>"required|numeric",
            'category_id'=>'required|exists:categories,id',
            'is_featured'=>'nullable|in:1',
            'status'=>'required|in:active,inactive',
            'condition'=>'required|in:default,new,hot',
            'price'=>'required|numeric',
            'discount'=>'nullable|numeric'
        ]);

        $slug = Str::slug($request->title);
        $product = Product::create([
            'title' => $request->title,
            'slug' => $slug,
            'summary' => $request->summary,
            'description' => $request->description,
            'photo' => $request->photos,
            'size' => $request->size,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
            'is_featured' => $request->is_featured,
            'status' => $request->status,
            'condition' => $request->condition,
            'price' => $request->price,
            'discount' => $request->discount,
            'is_featured' => 1,
        ]);
        $product->save();

        return redirect()->route('product.index');

    }

    /**
     * Show the specified resource.
     */
    public function show($product)
    {
        $product = Product::where('slug', $product)->first();
        return view('shop.products.product-detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dashboard::shop.products.edit', compact('product'));
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
    public function destroy(Product $product)
    {
        //
    }
}
