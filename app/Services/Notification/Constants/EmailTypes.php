<?php

namespace App\Services\Notification\Constants;

class EmailTypes
{
    const USER_REGISTERED = 1;
    const TOPIC_CREATED = 2;
    const FORGET_PASSWORD = 3;

    public static function toString()
    {
        return [
            self::USER_REGISTERED =>'ثبت نام کاربر',
            self::TOPIC_CREATED =>'ایجلد مقاله جدید',
            self::FORGET_PASSWORD =>'فراموشی رمز عبور'
        ];
    }
}
