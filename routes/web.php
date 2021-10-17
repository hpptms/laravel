<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwitterLoginController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\EventAddController;
use App\Http\Controllers\EventController;

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
    return view('top');
})->name('Home');

Route::get('etc/event-view{page}', 'EventController@show');

Route::get('dashboard/event-change{page}', 'EventController@change');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/welcome', function () {
    return view('dashboard/welcome');
})->name('dashboard');

Route::get('auth/login/twitter', 'TwitterLoginController@redirectToProvider');
Route::get('login/twitter/callback','TwitterLoginController@handleProviderCallback');

Route::get('auth/login/google', 'GoogleAuthController@getGoogleAuth');
Route::get('login/google/callback', 'GoogleAuthController@authGoogleCallback');

Route::get('etc/policy', function () {
    return view('etc/policy');
})->name('policy');

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/event-create', function () {
    return view('dashboard/event-create');
})->name('create-event');

Route::post('dashboard/event-add', 'EventAddController@CreateEvent')->name('event-add');

Route::post('dashboard/event-change-Preview', 'EventAddController@ChangeEvent')->name('event-change');

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/event-Preview', function () {
    return view('dashboard/event-Preview');
})->name('event-Preview');
