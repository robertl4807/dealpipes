<?php

use App\Mail\TestMailHog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', [AdminController::class,'home'])->name('home');

Route::get('dashboard', [AdminController::class,'index'])->name('index');

Route::view('signup', 'auth.signup')->name('signup');

Route::post('signup', [RegisterController::class,'signup'])->name('signup');

Route::get('verifyEmail', [RegisterController::class,'verifyEmailFrm']);

Route::post('verifyEmail', [RegisterController::class,'verifyEmail']);

Route::get('verifyPhone',[RegisterController::class,'verifyPhone']);

Route::post('verifyPhoneSubmit',[RegisterController::class,'verifyPhoneSubmit']);

Route::get('selectPlan',[RegisterController::class,'selectPlan']);

Route::post('selectPlanSubmit',[RegisterController::class,'selectPlanSubmit']);


//Do not delete these
Route::get('login', function(){
  Auth::loginUsingId(1);
  return 'Logged In Now';
});
Route::middleware('can:send_sms')->get('/1', function () {
  return 'YES';
});
Route::get('test-mailhog', function(){
  Mail::to('info@dealpipes.test')->send(new TestMailHog());
  return 'Sent email - '.rand(1,10000);
});
