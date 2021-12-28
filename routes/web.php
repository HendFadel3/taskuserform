<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

use App\Http\Controllers\taskuserform;


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
});

Route:: get('student/create',[usercontroller::class,'create']);
Route:: post('student/store',[usercontroller::class,'store']);
Route:: get('student',[usercontroller::class,'index']);
Route:: get('student/edit/{id}',[usercontroller::class,'edit']);
Route:: post('student/update',[usercontroller::class,'update']);
Route::get('student/remove/{id}', [usercontroller::class, 'delete']);
Route::get('login', [usercontroller::class, 'login']);
Route::post('DoLogin', [usercontroller::class, 'DoLogin']);
Route::get('logout', [usercontroller::class, 'logout']);






// Route:: get('taskuserform/create',[taskuserform::class,'taskuserform']);
// Route:: post('taskuserform/store',[taskuserform::class,'store']);

