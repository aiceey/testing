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

// Route::get('/projects', [ProjectsController::class, 'index']);
// Route::get('/projects/create', [ProjectsController::class, 'create']);

// Route::get('/projects/{project}',[ProjectsController::class, 'show']);

// Route::post('/projects', [ProjectsController::class, 'store']);//saving

// Route::get('/projects/{project}/edit', [ProjectsController::class, 'edit']);

// Route::patch('/projects/{project}', [ProjectsController::class, 'update']);//update

// Route::delete('/projects/{project}', [ProjectsController::class, 'destroy']);//delete


Route::resource('projects', ProjectsController::class); // buong controller
Route::get('auth/register', function () {
    return view('auth/register');
});

Route::get('auth/login', function () {
    return view('auth/login');
});

// GET /projects (index) retrieving
// GET /projects/create (create) 

// GET /projects/id  (show) 
// POST /projects (store)  saving
// GET /projects/id/edit (edit) 

// PATCH /projects/id (update)  update
// DELETE /projects/id (destroy)  delete
