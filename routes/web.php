<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Controller;



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



Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
        /* -------- home routes ------------ */
    
    Route::get('/', function() {
        return view('home');
    });
    Route::group(['middleware' => ['guest']], function() {

            /* -------- register routes ------------ */

        Route::get('/register', 'RegisterController@showRegister')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

            /* -------- login routes ------------ */
            
        Route::get('/login', 'LoginController@showLogin')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        

            /* -------- logout routes ------------ */

        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});


/* ------- events/CRUD routes ---------------- */

Route::get('/events', function() {
    return view('events');
});

/* -------- blog/CRUD routes -------------- */

Route::get('/blog', function() {
    return view('blog');
});

Route::get('/blog', [PostController::class, 'showAllPosts']);

Route::post('/postCreate', [PostController::class, 'create']);

Route::get('/postFull/{id}', [PostController::class, 'show']);

Route::delete('/post/{id}', [PostController::class, 'delete']);





/* -------- ads routes, suspended until further notice------------------- */

Route::get('/personal-ads', function() {
    return view('personal-ads');
});
