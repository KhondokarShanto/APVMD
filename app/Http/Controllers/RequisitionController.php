<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requisition;

class RequisitionController extends Controller
{
  function index()
  {
    return view ('frontpage.requisitionpage.index');
  }
  function showRequisition()
  {
    $requisitions = Requisition::all();
    return view('backend.requisition',compact('requisitions'));
  }
  function createRequisition()
  {
    return view('backend.createRequisition');
  }
  function create(Request $request)
  {
    Requisition::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'details'=>$request->details,
    ]);
    return back();
  }
}
