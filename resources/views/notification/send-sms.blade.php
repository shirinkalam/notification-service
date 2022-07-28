@extends('layouts.layout')

@section('title' , 'Send Sms')

@section('content')

<div>
    <div>
        <div>
            <div>
            @lang('notification.send_sms')
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
                <form action="{{route('notification.form.send.sms')}}" method="POST">
                    @csrf
                    <div>
                        <label for="user">@lang('notification.users')</label>
                        <select name="user" id="">
                            @foreach ($users as $user)
                            <option {{old('user')== $user->id ? 'selected' :''}} value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="test">@lang('notification.sms_text')</label>
                        <textarea name="text" id="text" rows="3">
                            {{old('text')}}
                        </textarea>
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
