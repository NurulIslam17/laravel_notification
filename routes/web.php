<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FontController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[FontController::class,'home'])->name('home');
Route::post('/contact',[FontController::class,'contactUs'])->name('contact');


Route::post('/send-notification',[FontController::class,'sendNotification'])->name('email.notification');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
