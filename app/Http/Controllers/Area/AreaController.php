<?php

namespace App\Http\Controllers\Area;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Area;

class AreaController extends Controller
{
  function index()
  {
    return view ('frontpage.areapage.index');
  }
  function showArea()
  {
    $areas = Area::all();
    return view('backend.area',compact('areas'));
  }
  function createArea()
  {
    return view('backend.createArea');
  }
  function create(Request $request)
  {
    Area::insert([
        'name'=>$request->name,
        'code'=>$request->code,
    ]);
    return back();
  }
}
