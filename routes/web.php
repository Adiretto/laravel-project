<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    $config['center'] = 'Air Canada Centre, Toronto';
    $config['zoom'] = '14';
    $config['map_height'] = '500px';
    GMaps::initialize($config);
    $map = GMaps::create_map();
    return view('home')->with('map',$map);
});
Route::get('/home', function () {
    $config['center'] = 'Air Canada Centre, Toronto';
    $config['zoom'] = '14';
    $config['map_height'] = '500px';
    GMaps::initialize($config);
    $map = GMaps::create_map();
    return view('home')->with('map',$map);
});
Route::get('/workouts', function () {
    return view('workouts');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/community', function () {
    return view('community');
});

Route::get('/login',[\App\Http\Controllers\UserController::class,'showLoginForm'])->name('login');
Route::get('/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('logout');
Route::post('/login_process',[\App\Http\Controllers\UserController::class,'login'])->name('login_process');

Route::get('/register',[\App\Http\Controllers\UserController::class,'showRegisterForm'])->name('register');
Route::post('/register_process',[\App\Http\Controllers\UserController::class,'register'])->name('register_process');



