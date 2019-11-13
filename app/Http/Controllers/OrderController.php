<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
  function index()
  {
    return view ('frontpage.orderpage.index');
  }
  function showOrder()
  {
    $orders = Order::all();
    return view('backend.order',compact('orders'));
  }
  function createOrder()
  {
    return view('backend.createOrder');
  }
  function create(Request $request)
  {
    Order::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'order'=>$request->order,
    ]);
    return back();
  }
}
