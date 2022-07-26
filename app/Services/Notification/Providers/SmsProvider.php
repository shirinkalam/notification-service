<?php
namespace App\Services\Notification\Providers;

use App\Models\User;
use Illuminate\Mail\Mailable;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;
use App\Services\Notification\Providers\Contracts\Provider;

class SmsProvider implements Provider
{
    private $user ;
    private $text;

    public function __construct(User $user , string $text)
    {
        $this->user = $user ;
        $this->text = $text ;
    }


    public function send()
    {
        $client = new Client();

        // dd($options);

        $response = $client->post(config('services.sms.uri') , $this->prepareDataForSms());
        return $response->getBody();
    }

    private function prepareDataForSms()
    {
            $data =
            array_merge(config('services.sms.auth') ,
                [
                    'op' => 'send',
                    'message'=>$this->text,
                    'to' =>[$this->user->phone_number],
                ]
            )
        ;

        return [
            'json' => $data
        ];
    }
}
