<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\Notification\Constants\EmailTypes;
use App\Services\Notification\Notification;
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

    public function sendEmail(Request $request)
    {
        $request->validate([
            'user' => 'integer | exists:users,id',
            'email_type' => 'integer',
        ]);

        try{
            $mailable=EmailTypes::toMail($request->email_type);
            $notification = resolve(Notification::class);
            $notification->sendEmail(User::find($request->user) ,new $mailable);

            return redirect()->back()->with('success',__('notification.email_sent_successfuly'));
        }catch(\Throwable $th){
            return redirect()->back()->with('failed',__('notification.email_sent_failed'));
        }
    }

    public function sms()
    {
        $users=User::all();
        return view('notification.send-sms',compact('users'));
    }
}
