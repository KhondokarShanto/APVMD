<?php

namespace App\Http\Controllers\Supplier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
  function index()
  {
    return view ('frontpage.supplierpage.index');
  }
  function showSupplier()
  {
    $suppliers = Supplier::all();
    return view('backend.supplier',compact('suppliers'));
  }
  function createSupplier()
  {
    return view('backend.createSupplier');
  }
  function create(Request $request)
  {
    Supplier::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'details'=>$request->details,
    ]);
    return back();
  }
}
