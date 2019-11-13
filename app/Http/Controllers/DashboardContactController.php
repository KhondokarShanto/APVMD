<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class DashboardContactController extends Controller
{
    function index()
    {
      $contacts = Contact::all();
      return view('dashboardpage.dashcontactpage.index',compact('contacts'));

    }
}
