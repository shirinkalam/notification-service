<?php

use App\Mail\TopicCreated;
use App\Services\Notification\Notification;
use App\Models\User;
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
    $notification = resolve(Notification::class);
    $notification->sendEmail(User::find(1) ,new TopicCreated);
});
