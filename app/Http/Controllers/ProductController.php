<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePostRequest;

class ProductController extends Controller
{

    public function index()
    {
        $products = Products::latest()->paginate(9);
        $categories = Category::all();
        return view('products.index')->with('products', $products, 'categories', $categories);
    }


    public function create()
    {
       return view('products.create')->with(['categories' => Category::all(),]);
    }

    public function store(StorePostRequest $request)
    {
        if($request->hasFile('photo')){
            $name =$request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('product-photos',$name);
             }

             $products = Products::create([
                 'user_id' => auth()->user()->id,
                 'category_id' =>$request->category_id,
                 'title' => $request->title,
                 'short_content' => $request->short_content,
                 'content'=>$request->content,
                 'price'=>$request->price,
                 'photo' => $path ?? null,


             ]);
             return redirect()->route('products.index');

            }

    public function show(Products $products)
    {
        return view('products.show')->with([
            'product'=>$products,
            'categories'=>Category::all(),
        ]);
    }


    public function edit(Products $products)
    {
        return view('products.edit');
    }

    public function update(StorePostRequest $request, Products $product)
    {
        if($request->hasFile('photo')){
            if(isset($product->photo)){
                Storage::delete($product->photo);
            }
            $name =$request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('product-photos',$name);
             }
        $product->update([

        'title'=> $request->title,
        'short_content'=> $request->short_content,
        'content'=> $request->content,
        'photo' => $path ?? $product->photo,
        ]);
        return redirect()->route('products.show',['product'=>$product->id]);

    }


    public function destroy(Products $product)
    {

        if(isset($product->photo)){
            Storage::delete($product->photo);
        }
    $product->delete();

    return redirect()->route('products.index');
    }
}
