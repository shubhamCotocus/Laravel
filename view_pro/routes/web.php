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
    return view('welcome');
});


Route::get('about',function(){     //we use return function() for large amount of logic
    return view('aboutme');
 });
// Route::get('/about',function(){
//     return view('aboutme');
// });
//Route::view('about','aboutme');      //we use view for single message.
Route::get('profile',function(){
    return view('admin.profile'); 
   });
//Route::view('profile','admin.profile');