<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/template.css')}}">
    <link rel="stylesheet" href="{{asset('css/customselect.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    @stack('css')
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="custom-nav-bar">
                <div class="nav-logo">
                    <a href="http://" class="monster-logo">
                        <img src="{{asset('images/monster-logo.svg')}}" alt="">
                    </a>
                </div>
                <div class="nav-wapper">
                    <ul class="custom-nav-items">
                        <li class="nav-link"><a href="http://" class="nav-link-name">Job Search</a></li>
                        <li class="nav-link"><a href="http://" class="nav-link-name">Fresher</a></li>
                        <li class="nav-link"><a href="http://" class="nav-link-name">Blog</a></li>
                        <li class="nav-link"><a href="http://" class="nav-link-name">About</a></li>
                    </ul>
                    <ul class="login-section-nav">
                        <li class="nav-link">
                            <a href="" class="cbtn nav-link-name"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                            <li class="nav-link"><a href="" class="cbtn nav-link-name"><i class="fa fa-users" aria-hidden="true"></i>Employer Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/searcharea.js')}}"></script>
        @stack('script')
    </body>
    </html>
