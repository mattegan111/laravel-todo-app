<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    public function index() 
    {
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show($todoId) 
    {
        return view('todos.show')->with('todo', Todo::find($todoId));
    }
}
