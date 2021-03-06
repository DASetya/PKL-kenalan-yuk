<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Question\QuestionController;
use App\Http\Controllers\Admin\MyStoryCategory\MyStoryCategoryController;
use App\Http\Controllers\Admin\Psychologist\PsychologistController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/
Route::namespace('Auth')->group(function() {
    Route::middleware('guest:admin')->group(function() {
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('login');
    });
    Route::middleware('auth:admin')->group(function() {
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    });
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/', function () {
        // return view('admin.dashboard.index');
        return redirect()->route('admin.questions.index');
    })->name('index');

    Route::resource('questions', QuestionController::class);
    Route::resource('my-story-categories', MyStoryCategoryController::class);
    Route::resource('psychologists', PsychologistController::class);
});
