<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>

    <nav>
        <a href="#">
            Shirinkalam
        </a>
        <button type="button">

        </button>
        <div>
            <ul>
                <li>
                    <a href=""></a>
                    <div>
                        <a href="{{ route('notification.form.email')}}">
                            ارسال ایمیل
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
