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

Route::get('/greeting/{name?}', function ($name = null) {
    if($name){
        echo 'hello' . $name;
    } else {
        echo 'hello world';
    }
});
Route::get('/login',function (){
   return view('login');
});
Route::post('/login',function (Illuminate\Http\Request $request){
if ($request->username == 'admin' && $request->password == 'admin'){
    return view('welcome_admin');
}
return view('login_error');
});
Route::get('/calculator',function (){
   return view('calculator');
});
Route::post('/calculator',function (\Illuminate\Http\Request $request){
    $productDescription = $request->description;
    $listPrice = $request->price;
    $discountPercent = $request->discount;
    $discountAmount  = (float)$listPrice * (float)$discountPercent * 0.1;
    $discountPrice = (float)$listPrice - $discountAmount;
    $data = [$listPrice,$discountPercent,$discountAmount,$productDescription,$discountPrice];
   return view('show-discount-amount',compact('data'));
});
Route::get('/dictionary',function (){
   return view('dictionary');
});
Route::post('/dictionary',function(\Illuminate\Http\Request $request){
   $usa = $request->english;
   $array = ['dog' => 'chó','cat' => 'mèo','tiger' => 'hổ'];
   $result = null;
   foreach ($array as $key => $item){
       if($usa == $key){
           $result = $item;
           return view('result',compact('result','usa'));
       }
       }
});


