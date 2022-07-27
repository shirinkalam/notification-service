@extends('layouts.layout')

@section('title' , 'home')

@section('content')

<div>
    <div>
        <div>
            <div>
            @lang('notification.send_email')
            </div>
            <div>
                <form action="" method="POST">
                    <div>
                        <label for="tesst">@lang('notification.users')</label>
                        <select name="" id="">
                            @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="test">@lang('notification.email_type')</label>
                        <select name="test" id="">
                            @foreach($emailTypes as $key => $type)
                                <option value="{{$key}}">{{$type}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit">@lang('notification.send')</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
