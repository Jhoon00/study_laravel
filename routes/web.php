<?php

use App\Http\Controllers\UserController;
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

// Route::get('/test', function () {
//     return view('welcome');
// });
Route::get('/test', [UserController::class, 'test']);

// Route::get('/register', function () {
//     return view('register_form');
// });
Route::get('/register', [UserController::class, 'create']);

// Route::get('/update', function(){
//     return view('update_form');
// });
Route::get('/update', [UserController::class, 'edit']);

// Route::get('/players', function(){
//     return view('list');
// });
Route::get('/players', [UserController::class, 'index']);

// Route::post('/register', function (Request $req) {
//     $email = $req->input("email");
//     $name = $req->input("name");
//     $birthDate = $req->input("birthDate");
//     $organization = $req->input("organization");

//     return view('register', ["email"=>$email, "name"=>$name, "birthDate"=>$birthDate, "organization"=>$organization]);
// });
Route::post('/register', [UserController::class, 'store']);

// Route::put('/update', function (Request $req){
//     $email = $req->input("email");
//     $name = $req->input("name");
//     $birthDate = $req->input("birthDate");
//     $organization = $req->input("organization");

//     return view('update', ["email"=>$email, "name"=>$name, "birthDate"=>$birthDate, "organization"=>$organization]);
// });
Route::put('/update', [UserController::class, 'update']);

// Route::delete('/remove', function (Request $req) {
//     $name = $req->input("name");

//     return view('/remove', ["name"=>$name]);
// });
Route::delete('/remove', [UserController::class, 'destroy']);
