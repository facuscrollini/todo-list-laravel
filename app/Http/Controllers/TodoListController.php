<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TodoListController extends Controller
{
    //
    public function todoList(Request $request)
    {
            /** @var \App\Models\User $user */
            $user = Auth::user();
            $name = $user->name;
            $todos = $user->todos;

            
            return view('todo-list', compact('name', 'todos'));
    }
}
