<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProjectsController;

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

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);

Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/projects/create', [ProjectsController::class, 'create']);
Route::post('/projects', [ProjectsController::class, 'store']);//saving

// Route::get('/contact', function () {
//     return view('contact');
// });

