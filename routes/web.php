<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\select;

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
    return view('welcome');
});


Route::get('/users', function () {
    // $users = DB::table('users')->get(['name', 'email', 'country']);
    // $users = DB::table('users')->select('name', 'email', 'country')->get();

    // $users = DB::table('users')->get();
    // $users = DB::table('users')->find(10);
    $users = DB::table('users')->select('name', 'email')->find(10);


    return $users;
});
