<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;
use Auth;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todolists=TodoList::all();
        return view("home",compact("todolists"));
    }

  
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required',
        ]);
        TodoList::create($data);
        return redirect('/home');
    }

    public function destory(TodoList $todolist)
    {
        $todolist->delete();
        return redirect()->back();
    }
}
