<?php

use Illuminate\Http\Request;
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

Route::get('home',function(){
    return 'not old enough';
});

Route::get('ageof',['middleware'=>'ageCheck',function(){
    return '100 years have been added to your life';
}]);

Route::get('request-test',function(Request $request){
    return $request;
});