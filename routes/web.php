<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrationcontroller;

use App\Models\Customer;
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

// Route::get('/form',function(){
//     return view('form');
// });

Route:: get('/form',[registrationcontroller::class,'index']);
Route:: post('/form',[registrationcontroller::class,'register']);
Route:: get('/show',[registrationcontroller::class,'show']);
Route:: get('/delete/{id}',[registrationcontroller::class,'delete']);
Route:: get('/edit/{id}',[registrationcontroller::class,'edit']);
Route:: post('/update/{id}',[registrationcontroller::class,'update']);
// Route::get("/customer",function()
// {
//     $customer=Customer::all();
//     echo"<pre>";
//     print_r($customer->toArray());
// });