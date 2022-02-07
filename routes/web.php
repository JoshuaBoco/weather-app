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

Route::get('/', function () {


    
    return view('weather-app');
});
Route ::get('city/{name}', function($name){
   $allowed_cities= ['tokyo', 'sapporo', 'yokohama','kyoto','osaka','nagoya'];
   if(!in_array(strtolower($name),$allowed_cities)){
       return response('Not Found', 404);
   }
    return $name;


});