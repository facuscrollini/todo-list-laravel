<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\CreateTodoController;
use App\Http\Controllers\WelcomeController;

Route::get('/',[WelcomeController::class, "welcome"]);

Route::get('/login',[LoginController::class, "login"])->name('login');
Route::post('/login',[LoginController::class, "login"]);

Route::get('/register', [RegisterController::class, "register"])->name('register');
Route::post('/register', [RegisterController::class, "register"])->name('register');


Route::get('/todo-list', [TodoListController::class, "todoList"])->middleware('auth')->name('todo-list');


Route::get('/create-todo', [CreateTodoController::class, 'createTodo'])->middleware('auth')->name('create-todo');
Route::post('/create-todo', [CreateTodoController::class, 'createTodo'])->middleware('auth')->name('create-todo');

