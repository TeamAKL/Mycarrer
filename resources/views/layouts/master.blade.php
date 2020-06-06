<!---
    -         -    -         -      - - - -         -         - - - - -        - - - - -   - - - - -   - - - - -
    - -     - -     -       -      -               -  -       -         -      -           -           -        -
    -   - -   -       -   -       -               -    -      -          -     -           -           -         -
    -         -         -         -              - -  - -     - - - - - -      - - - - -   - - - - -   - - - - - -
    -         -         -          -            -        -    -        -       -           -           -        -
    -         -         -            - - - -   -          -   -         -      - - - - -   - - - - -   -         -
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="_token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" sizes="76x76" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/template.css')}}">
    <link rel="stylesheet" href="{{asset('css/templateTabet.css')}}">
    <link rel="stylesheet" href="{{asset('css/customselect.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/seeker_index.css')}}"> --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    @stack('css')
    <title>MyCareers</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="spinner-master3">
                <input type="checkbox" id="spinner-form3" />
                <label for="spinner-form3" class="spinner-spin3">
                    <div class="spinner3 diagonal part-1"></div>
                    <div class="spinner3 horizontal"></div>
                    <div class="spinner3 diagonal part-2"></div>
                </label>
            </div>
            <div class="custom-nav-bar">
                <div class="nav-logo">
                    <a href="{{url('/')}}" class="monster-logo">
                        <img src="{{asset('images/MCMLogo.png')}}" alt="">
                    </a>
                </div>
                <div class="nav-wapper">
                    <ul class="custom-nav-items">
                        <li class="dropdown">
                            <span class="dropbtn">JOB SEARCH</span>
                            <div class="dropdown-content">
                                <a href="#">JOB BY COMPANY</a>
                                <a href="#">JOB BY POSITION</a>
                                <a href="#">JOB BY SKILL</a>
                                <a href="#">PART TIME JOB</a>

                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropbtn">FRESHER </a>

                        </li>
                        <li class="dropdown">
                            <span href="" class="dropbtn">BLOG</span>
                            <div class="dropdown-content">
                                <a href="#"> NEWS</a>
                                <a href="#">JS TOOLKITS</a>
                                <a href="#">EMPLOYER TOOLKITS</a>
                                <a href="#">HOW TO LOGIN</a>
                                <a href="#">HOW TO POST</a>

                            </div>
                        </li>
                        <li class="dropdown">
                            <span class="dropbtn">ABOUT</span>
                            <div class="dropdown-content">
                                <a href="#">JOB SEEKERS TOOLKITS</a>
                                <a href="#">EMPLOYER TOOLKITS</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="login-section-nav">
                        @guest
                        <li class="nav-link">
                            <a href="{{url('login')}}" class="cbtn nav-link-name"><i class="fa fa-user" aria-hidden="true"></i>Login</a>
                        </li>
                        <li class="nav-link" id="one"><span class="cbtn nav-link-name"><i class="fa fa-users" aria-hidden="true"></i>Employer Login</span>
                            <div class="dropdown-content">
                                <a href="#">JOB SEEKERS TOOLKITS</a>
                                <a href="#">EMPLOYER TOOLKITS</a>
                            </div>
                        </li>
                        @else
                        <li class="nav-link logined-usname share-hover mr0 pr">
                            {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a> --}}
                            <div class="profile-avatar-user">
                                <img src="{{asset('images/adele.jpg')}}" alt="" class="current-user">
                            </div>

                            <div class="pop-share profile-hover dropdown-content">
                                <a class="dropdown-item">{{ Auth::user()->name }}</a>
                                {{-- <a href="http://"><i class="fa fa-facebook-square social-font-l" aria-hidden="true"></i></a>
                                <a href="http://"><i class="fa fa-twitter-square social-font-l" aria-hidden="true"></i></a>
                                <a href="http://"><i class="fa fa-linkedin-square social-font-l" aria-hidden="true"></i></a>
                                <a href="http://"><i class="fa fa-envelope-o social-font" aria-hidden="true"></i></a> --}}
                                <div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>


                            {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form> --}}
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</header>

<div class="custom-padding">
    @yield('content')
</div>

<!---- Footer --->
<div class="footer-social">
    <div class="container">
        <div class="row">
            <div class="col-md-3 custom-blue">
                <span class="tooltipc" data-tip ="Web Site Viewers" tabindex = "1">
                    @inject('Counter', 'App\Http\CounterTrait\Counter')
                    <i class="fa fa-eye" aria-hidden="true"></i>{{$Counter->userCounter()}}
                </span>

            </div>
            <div class="col-md-3">
                <a href="tel:+9599771777212"><i class="fa fa-phone-square social-font" aria-hidden="true"></i>09771777212</a>
            </div>
            <div class="col-md-3"><a href="mailto:info@mycareersmyanmar.com"><i class="fa fa-envelope-o social-font" aria-hidden="true"></i>info@mycareersmyanmar.com</a></div>
            <div class="col-md-3 last-social-items">
                <a href="mailto:" class="pl"><i class="fa fa-twitter-square social-font-l" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/mycareersmyanmar/" class="pl"><i class="fa fa-facebook-square social-font-l" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/in/my-careers-7b75231a5/" class="pl"><i class="fa fa-linkedin-square social-font-l" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div>
                    <h5 class="footer-title">Job Seekers</h5>
                    <div><a href="http://" class="footer-link">Job Search</a></div>
                    <div><a href="http://" class="footer-link">Log In</a></div>
                    <div><a href="http://" class="footer-link">Upload Resume</a></div>
                    <div><a href="http://" class="footer-link">Free Job Alert</a></div>
                    <div><a href="http://" class="footer-link">Find Companies</a></div>
                    <div><a href="http://" class="footer-link">Help</a></div>
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <h5 class="footer-title">Employers</h5>
                    <div><a href="http://" class="footer-link">Employer Log In</a></div>
                    <div><a href="http://" class="footer-link">Job Posting</a></div>
                    <div><a href="http://" class="footer-link">Access Resume Database</a></div>
                    <div><a href="http://" class="footer-link">Advertise with Us</a></div>
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <h5 class="footer-title">Legal</h5>
                    <div><a href="http://" class="footer-link">Security</a></div>
                    <div><a href="http://" class="footer-link">Policy</a></div>
                    <div><a href="http://" class="footer-link">Terms of Us</a></div>
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <h5 class="footer-title">About Us</h5>
                    <div><a href="http://" class="footer-link">Career with Us</a></div>
                    <div><a href="http://" class="footer-link">Send Feedback</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="copyright-footer">
    <div class="container">
        <p class="copyright">&copy; 2020 MyCareers- All Rights Reserved</p>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/searcharea.js')}}"></script>
<script src="{{asset('js/template.js')}}"></script>
<script src="https://kit.fontawesome.com/a75f6596a2.js" crossorigin="anonymous"></script>

@stack('script')
</body>
</html>
