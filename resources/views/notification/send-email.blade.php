@extends('layouts.layout')

@section('title' , 'home')

@section('content')

<div>
    <div>
        <div>
            <div>
            @lang('notification.send_email')
            </div>
            @if(session('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
            @if(session('failed'))
                <div>
                    {{session('failed')}}
                </div>
            @endif
            <div>
                <form action="{{route('notification.form.send.email')}}" method="POST">
                    @csrf
                    <div>
                        <label for="user">@lang('notification.users')</label>
                        <select name="user" id="">
                            @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="test">@lang('notification.email_type')</label>
                        <select name="email_type" id="email_type">
                            @foreach($emailTypes as $key => $type)
                                <option value="{{$key}}">{{$type}}</option>
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                            <div>
                                <li>
                                    {{$error}}
                                </li>
                            </div>
                            @endforeach
                        </ul>
                    @endif

                    <button type="submit">@lang('notification.send')</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
