<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('welcome');
});

// routing for about page
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
// routing for service page
// Route::get('/service/{name}/{age?}' , function ($name , $age = null) {
//     return view('service')->with(compact('name' , 'age'));
//     // echo "$name $age";
//     // $data = compact ('name' , ' age');
//     // print_r($data);/
// });

Route::get('/about/{form}/{ghr}' ,  function ($form , $ghr = null){
    return view ('about')->with(compact('form' , 'ghr'));
});

Route::get('/all', function () {
    return view('all');
});
