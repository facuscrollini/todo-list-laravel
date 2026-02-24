<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class CompleteTodoController extends Controller
{
    //

    public function completeTodo($id){
        
        $todo = Todo::findOrFail($id);
        $todo->completed = true;
        $todo->save();

        return redirect('todo-list');
    }
}
