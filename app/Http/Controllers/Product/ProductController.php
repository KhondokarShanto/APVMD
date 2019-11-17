<?php

namespace App\Http\Controllers\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
  function index()
  {
    return view ('frontpage.productpage.index');
  }
  function showProduct()
  {
    $products = Product::all();
    return view('backend.product',compact('products'));
  }
  function createProduct()
  {
    return view('backend.createProduct');
  }
  function create(Request $request)
  {
    Product::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'product'=>$request->product,
    ]);
    return back();
  }
  function edit($id)
  {
    $edit= Product::find($id);
            return view('backend.updateProduct',compact('edit'));

  }

  function update(Request $request,$id)
  {
    $data=Product::findorFail($id);
    $data->update([
      'name'=>$request->name,
      'email'=>$request->email,
      'phone'=>$request->phone,
      'product'=>$request->product,
    ]);

    return redirect()->route('dashproduct');
  }
  function delete($id)
  {
    $data=Product::find($id);
        $data->delete();
    return back();
  }
}
