<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register_form');
});

Route::get('/update', function(){
    return view('update_form');
});

Route::get('/remove', function(){
    return view('remove_form');
});

Route::post('/register', function (Request $req) {
    $email = $req->input("email");
    $name = $req->input("name");
    $birthDate = $req->input("birthDate");
    $organization = $req->input("organization");

    return view('register', ["email"=>$email, "name"=>$name, "birthDate"=>$birthDate, "organization"=>$organization]);
});

Route::put('/update', function (Request $req){
    $email = $req->input("email");
    $name = $req->input("name");
    $birthDate = $req->input("birthDate");
    $organization = $req->input("organization");

    return view('update', ["email"=>$email, "name"=>$name, "birthDate"=>$birthDate, "organization"=>$organization]);
});

Route::delete('/remove', function (Request $req) {
    $name = $req->input("name");

    return view('/remove', ["name"=>$name]);
});
