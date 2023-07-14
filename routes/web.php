<?php

use App\Http\Controllers\RegisterationController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/register', function () {
//     $pageName = "Registration";
//     $data = compact('pageName');
//     return view('form')->with($data);
// });


// Route::post('/register', function () {
//     $pageName = "Registration";
//     $data = compact('pageName');
//     return view('form')->with($data);
// });


// Route::get('/update', function () {
//     $pageName = "Update Info";
//     $data = compact('pageName');
//     return view('form')->with($data);
// });


// Route::get('/{name?}', function ($naam="") {
//     $arr = [1,3,21,22];
// $pageName = "Registration";
// $data = compact('naam','pageName','arr');

//     return view('index')->with($data);
// });


Route::get('/register' , [RegisterationController::class , 'form']);
Route::post('/register' , [RegisterationController::class , 'createRecord']);
Route::get('/unique' , SingleActionController::class);
Route::get('/sessions' , function(){

echo "<pre>";

print_r($_SESSION);
echo "</pre>";

});

Route::resource('/users' , UsersController::class);

?>
