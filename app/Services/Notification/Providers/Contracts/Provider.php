<?php
namespace App\Services\Notification\Providers\Contracts;

use App\Models\User;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;


interface Provider
{
    public function send();
}
