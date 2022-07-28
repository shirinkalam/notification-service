<?php

use App\Mail\TopicCreated;
use App\Services\Notification\Notification;
use App\Models\User;
use App\Http\Controllers\NotificationsController;
// use Illuminate\Support\Contracts\Mail;

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
    return view('layouts.home');
});

Route::get('/notification/send-email',[NotificationsController::class,'email'])->name('notification.form.email');
Route::post('/notification/send-email',[NotificationsController::class,'sendEmail'])->name('notification.form.send.email');

