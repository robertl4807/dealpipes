<?php

use Illuminate\Support\Facades\Auth;
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

/*
* TODO List:
 * Add owner has many through for user on various types
 *
 *
 */


Route::get('/', function () {
  return view('welcome');
});

Route::get('login', function(){
  Auth::loginUsingId(1);
  return 'Logged In Now';
});

Route::get('logout', function(){
  Auth::logout();
  return 'Logged Out';
});

Route::middleware('can:send_sms')->get('/1', function () {
  return 'YES';
});

Route::get('test-mailhog', function(){

});

