<?php

use App\Http\Controllers\HomeController;
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

//Route::get('index', function () {
//    return view('modules.customer.index');
//});
Route::prefix('customer')->group(function (){
   Route::get('/index',[HomeController::class,'index']);
  Route::get('/create',[HomeController::class,'create'])->name('customer.create');
   Route::get('store',function (){

   });
  Route::get('/show',[HomeController::class,'show'])->name('customer.show');
    Route::get('{id}/update',function (){

   });
   Route::get('{id}/edit',function (){

   });
   Route::get('{id}',function (){

   });
});
