<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[userController::class,'index']);

// Add Admin Departments
Route::get('/add_departments',[userController::class,'dept_create']);
Route::post('/add_departments',[userController::class,'dept_store']);

// Add Admin Designations
Route::get('/add_designations',[userController::class,'desig_create']);
Route::post('/add_designations',[userController::class,'desig_store']);

//USER Creation
Route::get('/add_user',[userController::class,'user_create']);
Route::post('/add_user',[userController::class,'user_store']);