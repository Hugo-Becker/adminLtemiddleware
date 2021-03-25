<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MailController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('contacts', ContactController::class);

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


// Route::get('/sendemail', 'EmailController@index');
// Route::post('/sendemail/send', 'EmailController@send');

Route::post('/sendMail', [MailController::class,'store']);
