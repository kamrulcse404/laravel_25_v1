<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
    // $users = DB::table('users')->select('name', 'email')->find(10);



    // DB::table('users')->insert([
    //     ['name' => 'Farjana', 'email' => 'farjana1@gmail.com', 'password' => Hash::make('password')],
    //     ['name' => 'Farjana1', 'email' => 'farjana2@gmail.com', 'password' => Hash::make('password')],
    //     ['name' => 'Farjana2', 'email' => 'farjana3@gmail.com', 'password' => Hash::make('password')],
    //     ['name' => 'Farjana2', 'email' => 'farjana4@gmail.com', 'password' => Hash::make('password')],
    // ]);

    // $users = DB::table('users')->select('name', 'email', 'country')->orderBy('id', 'desc')->first();


    // $users = DB::table('users')->where('is_admin', '=', true)->get();
    // $users = DB::table('users')->where('is_admin', true)->get();

    // $users = DB::table('users')->where('country', 'Bangladesh')->update(['country' => 'Canada']);
    // $users = DB::table('users')->where('country', 'Canada')->get();

    // DB::table('users')->where('country', 'Kenya')->delete();
    $users = DB::table('users')->get();


    return $users;
});
