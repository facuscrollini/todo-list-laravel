<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateTodoController extends Controller
{
    //

    public function createTodo(Request $request){

        if($request->only("title", "description")){
            
            /** @var \App\Models\User $user */
            $user = Auth::user();

            $user->todos()->create([
                'title'=> $request->input('title'),
                'description'=> $request->input('description'),
                'completed' => false
            ]);

            return redirect('todo-list');
        }


        return view('create-todo');
    }
}
