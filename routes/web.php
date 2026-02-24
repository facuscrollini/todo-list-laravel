<?php

use App\Http\Controllers\CompleteTodoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\CreateTodoController;
use App\Http\Controllers\DeleteTodoController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\WelcomeController;

Route::get('/',[WelcomeController::class, "welcome"]);

Route::get('/login',[LoginController::class, "login"])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class, "login"])->middleware('guest');

Route::get('/register', [RegisterController::class, "register"])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, "register"])->middleware('guest')->name('register');


Route::get('/todo-list', [TodoListController::class, "todoList"])->middleware('auth')->name('todo-list');


Route::get('/create-todo', [CreateTodoController::class, 'createTodo'])->middleware('auth')->name('create-todo');
Route::post('/create-todo', [CreateTodoController::class, 'createTodo'])->middleware('auth')->name('create-todo');


Route::post('/logout', [LogoutController::class, "logout"])->middleware('auth')->name('logout');


Route::post('/complete-todo/{id}', [CompleteTodoController::class, "completeTodo"])->middleware('auth')->name('complete-todo');


Route::post('/delete-todo/{id}', [DeleteTodoController::class, "deleteTodo"])->middleware('auth')->name('delete-todo');