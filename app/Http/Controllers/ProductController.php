<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;
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

            //  PostCreated::dispatch($products);

             return redirect()->route('products.index');

            }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
