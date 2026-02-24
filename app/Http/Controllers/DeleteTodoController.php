<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class DeleteTodoController extends Controller
{
    //

    public function deleteTodo($id){
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect('todo-list');
    }
}
