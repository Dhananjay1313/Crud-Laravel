<?php

use App\Http\Controllers\Formcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [Formcontroller::class,'form']);

Route::get('/add', [Formcontroller::class,'add']);

Route::get('/person', [Formcontroller::class, 'list']);

Route::get('person/{id}/edit', [Formcontroller::class, 'edit']);

Route::delete('person/{id}/delete', [Formcontroller::class, 'destroy']);

Route::put('/person/{id}/update', [Formcontroller::class, 'update']);