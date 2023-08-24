<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
          integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
          crossorigin="anonymous" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body class="antialiased">

<nav class="navbar navbar-expand-lg navbar-info bg-warning">
    <div class="container">
        <a class="navbar-brand text-dark" href="{{ route('index') }}">Task App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('task.create') }}">New Task</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container p-5">
    @yield('main-content')
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
</body>

</html>




{{--    <!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>Laravel - ItSolutionStuff.com</title>--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">--}}
{{--    <style type="text/css">--}}
{{--        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);--}}

{{--        body{--}}
{{--            margin: 0;--}}
{{--            font-size: .9rem;--}}
{{--            font-weight: 400;--}}
{{--            line-height: 1.6;--}}
{{--            color: #212529;--}}
{{--            text-align: left;--}}
{{--            background-color: #f5f8fa;--}}
{{--        }--}}
{{--        .navbar-laravel--}}
{{--        {--}}
{{--            box-shadow: 0 2px 4px rgba(0,0,0,.04);--}}
{{--        }--}}
{{--        .navbar-brand , .nav-link, .my-form, .login-form--}}
{{--        {--}}
{{--            font-family: Raleway, sans-serif;--}}
{{--        }--}}
{{--        .my-form--}}
{{--        {--}}
{{--            padding-top: 1.5rem;--}}
{{--            padding-bottom: 1.5rem;--}}
{{--        }--}}
{{--        .my-form .row--}}
{{--        {--}}
{{--            margin-left: 0;--}}
{{--            margin-right: 0;--}}
{{--        }--}}
{{--        .login-form--}}
{{--        {--}}
{{--            padding-top: 1.5rem;--}}
{{--            padding-bottom: 1.5rem;--}}
{{--        }--}}
{{--        .login-form .row--}}
{{--        {--}}
{{--            margin-left: 0;--}}
{{--            margin-right: 0;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}

{{--<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="#">Task Manager</a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <ul class="navbar-nav ml-auto">--}}
{{--                @guest--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('login') }}">Login</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('register') }}">Register</a>--}}
{{--                    </li>--}}
{{--                @else--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>--}}
{{--                    </li>--}}
{{--                @endguest--}}
{{--            </ul>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

{{--@yield('content')--}}

{{--</body>--}}
{{--</html>--}}
