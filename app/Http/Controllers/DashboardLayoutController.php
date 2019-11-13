<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dashboard;
class DashboardLayoutController extends Controller
{
  function index()
  {
    return view ('dashboard.index');
  }
}
