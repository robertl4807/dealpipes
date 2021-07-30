<?php

use App\Mail\TestMailHog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
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
  return view('home');
});

Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('index');

Route::get('signup', function(){
  return view('auth.signup');
})->name('signup');

Route::post('signup', [App\Http\Controllers\Auth\RegisterController::class, 'signup'])->name('signup');

Route::get('verifyEmail', function(){
  if (Session::has('user_info'))
    return view('auth.verifyEmail');
  else
    redirect('signup');
});

Route::post('verifyEmail', [App\Http\Controllers\Auth\RegisterController::class, 'verifyEmail']);

Route::get('verifyPhoneForm','App\Http\Controllers\Auth\RegisterController@verifyPhoneForm');
Route::post('verifyPhone','App\Http\Controllers\Auth\RegisterController@verifyPhone');


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
  Mail::to('info@dealpipes.test')->send(new TestMailHog());
  return 'Sent email - '.rand(1,10000);
});


Route::get('index/{locale}', [App\Http\Controllers\AdminController::class, 'lang']);
