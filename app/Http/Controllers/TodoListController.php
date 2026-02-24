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
        $fields = $request->only("title", "description");

        if ($fields) {

            /** @var \App\Models\User $user */
            $user = Auth::user();

            $user->todos()->create([
                'title'=> $request->input('title'),
                'description'=> $request->input('description'),
                'completed' => false
            ]);
            
            return view('todo-list');
        }
        return view('todo-list');
    }
}
