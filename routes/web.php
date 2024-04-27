<?php

use App\Livewire\TodoList;
use App\Livewire\Calculator;
use App\Livewire\ProductsSearch;
use App\Livewire\CascadingDropdown;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/counter', function () {
    return view('welcome');
})->name('counter');
Route::get('/calculate', Calculator::class)->name('calculator');
Route::get('/todo-list', TodoList::class)->name('todo_list');
Route::get('/cascading-dropdown', CascadingDropdown::class)->name('cascading_dropdown');
Route::get('/products', ProductsSearch::class)->name('products');