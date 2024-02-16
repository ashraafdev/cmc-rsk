<?php

use App\Http\Controllers\Controller;
use App\Livewire\File;
use App\Livewire\HomePage;
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

Route::get('/', HomePage::class);
Route::get('/file', File::class);
Route::view('/template',"welcome" );

Route::get("/print", [Controller::class, "exportPDF"]);
