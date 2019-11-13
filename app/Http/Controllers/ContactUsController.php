<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactUsController extends Controller
{
  function index()
  {
    return view ('frontpage.contactuspage.index');
  }

  function create(Request $request)
  {
    Contact::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'feedback'=>$request->feedback,





    ]);
    return back();

  }


}
