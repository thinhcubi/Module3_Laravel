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

//Route::get('index', function () {
//    return view('modules.customer.index');
//});
Route::prefix('customer')->group(function (){
   Route::get('index',function (){
    return view('modules.customer.index');
   });
   Route::get('create',function (){

   });
   Route::get('store',function (){

   });
   Route::get('{id}/show',function (){

   });
   Route::get('{id}/edit',function (){

   });
    Route::get('{id}/update',function (){

   });
   Route::get('{id}/edit',function (){

   });
   Route::get('{id}',function (){

   });
});
