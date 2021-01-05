<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\task;

class tasksController extends Controller
{
    // tasks
    public function index()
    {
        // $tasks = task::all()->get();
        $tasks = \DB::table('tasklist')->get();
        
        return view('dashboard', [
            'tasks' => $tasks
        ]);
    }
}
