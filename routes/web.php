<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
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

//basic route
//Route::get('/login', function () {
//    return view('Admin.Home.Dashboard');
//});

//Route::get('/{any}', function () {
//    return redirect('/admin/');
//})->where('any', '.*');
//
Route::get('/', function (Request $request) {
    return dd(\auth()->user());
    $user=DB::table('admins')->
    where("email","=","admin@eric.com")->get()->first();
    return dd($user);
});
