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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/register', function () {
    $pageName = "Registration";
    $data = compact('pageName');
    return view('form')->with($data);
});

Route::get('/update', function () {
    $pageName = "Update Info";
    $data = compact('pageName');
    return view('form')->with($data);
});


// Route::get('/{name?}', function ($naam="") {
//     $arr = [1,3,21,22];
// $pageName = "Registration";
// $data = compact('naam','pageName','arr');

//     return view('index')->with($data);
// });





?>
