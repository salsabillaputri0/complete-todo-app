<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskManager extends Controller
{
   function addTask()
   {
    return view('tasks.add');
   }
   
}
