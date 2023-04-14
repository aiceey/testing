<?php

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

Route::get('/', function () {
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to the work',
        'Go to the concert'
    ];
    return view('welcome', [
        'tasks' => $tasks,
        // 'foo' => request('title')
        'foo' => '<script>alert("testing")</script>'
    ]);
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});

