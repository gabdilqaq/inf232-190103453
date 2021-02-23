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
});;

Route::get('/user', function () {
    return view('username');
});;

Route::get('full_name/{fname}/{lname}',function($fname,$lname){
    return "First name: ".$fname."<br>Last name: ".$lname;
});

Route::get('id/{id}',function($id){
    return "id: ".$id;
});

Route::get('firstname/{fname}',function($fname){
    return "First name: ".$fname;
});
Route::get('lastname/{lname}',function($lname){
    return "Last name: ".$lname;
});

