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

Route:: get('blog/create',[usercontroller::class,'create']);

Route:: post('blog/store',[usercontroller::class,'validation']);



Route:: get('taskuserform/create',[taskuserform::class,'taskuserform']);
Route:: post('taskuserform/store',[taskuserform::class,'store']);

