<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todolists = TodoList::where('user_id', auth()->id())->get();
        return view("home",compact("todolists"));
    }

  
    public function store(Request $request)
    {
        TodoList::create(
            [
                'title' => $request->title,
                'user_id' => auth()->id()
            ]
        );
        return redirect('/home');
    }

    public function destroy(TodoList $todolist)
    {
        $todolist->delete();
        return redirect()->back();
    }
}
