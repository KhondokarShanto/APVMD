<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dashboard;
class DashboardLayoutController extends Controller
{
  function index()
  {
    return view ('dashboard.index');
  }
}
