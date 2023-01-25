<?php

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/projects', function () {
        return view('projects');
    })->name('projects');
    Route::get('/calendar', function () {
        return view('calendar');
    })->name('calendar');
    Route::get('/documents', function () {
        return view('documents');
    })->name('documents');
    Route::get('/reports', function () {
        return view('reports');
    })->name('reports');
});
