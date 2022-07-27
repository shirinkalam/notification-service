<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\Notification\Constants\EmailTypes;
class NotificationsController extends Controller
{
    /**
     * show send email form
     */
    public function email()
    {
        $users=User::all();
        $emailTypes=EmailTypes::toString();
        return view('notification.send-email',compact('users','emailTypes'));
    }
}
