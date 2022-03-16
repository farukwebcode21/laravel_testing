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

/*

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function(){
    return view('demo');
});

Route::get('/demo/{name}/{id?}', function($name, $id = null){
    echo $name. '';
    echo $id;
});


Route::get('test', function(){
    return "Welcome to test";
});

Route::any('/about', function(){
    echo "Testing Route post";
});

*/

// Route::put('users/{id}', function($id){

// });

// Route::patch();
// Route::delete('users/{id}', function($id){

// });

Route::get('/{name?}', function($name = null){
    $data = compact('name');
    return view('home')->with($data); 
});