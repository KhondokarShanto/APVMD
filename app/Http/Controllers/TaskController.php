<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{

  function TaskView()
  {
    $tasks = Task::all();
    return view('frontpage.taskpage.taskindex',compact('tasks'));

  }



  function TaskCreate()
  {
    return view ('frontpage.taskpage.taskcreate');
  }

  function create(Request $request)
  {
    Task::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,


    ]);
    return back();

  }
}
