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
            <!-- <div class="spinner-master3">
                <input type="checkbox" id="spinner-form3" />
                <label for="spinner-form3" class="spinner-spin3">
                    <div class="spinner3 diagonal part-1"></div>
                    <div class="spinner3 horizontal"></div>
                    <div class="spinner3 diagonal part-2"></div>
                </label>
            </div> -->
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
                            <a href="{{url('blog')}}" class="dropbtn">BLOG</a>
                            <div class="dropdown-content">
                                <a href="#"> NEWS</a>
                                <a href="#">JS TOOLKITS</a>
                                <a href="#">EMPLOYER TOOLKITS</a>
                                <a href="#">HOW TO LOGIN</a>
                                <a href="#">HOW TO POST</a>

                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="{{url('/about')}}" class="dropbtn">ABOUT </a>

                        </li>
                    </ul>
                    <ul class="login-section-nav">
                        @guest
                        <li class="nav-link guest">
                            <a href="{{url('seeker/login')}}" class="cbtn nav-link-name"><i class="fa fa-user" aria-hidden="true"></i>SEEKER LOGIN</a>
                            <span class="d-block pt6"><a href="{{url('employer/login')}}">LogIn as Employer Instead</a></span>
                        </li>
                        @else
                        <li class="nav-link">
                            @if(Auth::user()->role_id == 1)
                            <a href="{{url('employer')}}" style="cursor: pointer;"><i class="fa fa-tachometer" aria-hidden="true" style="font-size: 20px"></i></a>
                            @else
                            <a href="{{url('seeker/dashboard')}}" style="cursor: pointer;"><i class="fa fa-tachometer" aria-hidden="true" style="font-size: 20px"></i></a>
                            @endif
                        </li>
                        <li class="nav-link logined-usname share-hover mr0 pr">
                            <div class="profile-avatar-user">
                                @if(isset(Auth::user()->profile_details->profile_image))
                                <img src="{{asset('images/seeker_profile/'.Auth::user()->profile_details->profile_image)}}" alt="" class="current-user">
                                @else
                                <img src="{{asset('images/seeker_profile/defaultavator.webp')}}" alt="" class="current-user">
                                @endif
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
        <div class="nav-bar">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a class="res" href="{{url('/')}}" style="font-size:20px;"><b>MyCareers</b></a>
                @auth
                <a class="res" href="{{url('seeker/dashboard')}}" style="cursor: pointer;"><i class="fa fa-tachometer" aria-hidden="true" style="font-size: 15px"></i>Dashboard</a>
                @endauth
                <!-- <a class="res" href="#" id="dropdown1">Job Search  <i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content-nav" id="dropdown-content1">
                        <a href="#">Job By Company</a>
                        <a href="#">Job By Position</a>
                        <a href="#">Job By Skill</a>
                        <a href="#">Part Time Job</a>
                    </div> -->
                    <a href="#" class="res">Fresher</a>
                    <a href="#" class="res" id="dropdown2">Blog  <i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content-nav" id="dropdown-content2">
                        <a href="#">News</a>
                        <a href="#">JS Toolkits</a>
                        <a href="#">Employer Toolkits</a>
                        <a href="#">How To Login</a>
                        <a href="#">How To Post</a>
                    </div>
                    <a href="{{url('/about')}}" class="res">About </a>

                    @guest
                    <a href="{{url('seeker/login')}}" class="res">Seeker Login</a>
                    <a href="{{url('employer/login')}}" class="res">Login as Employer Instead</a>
                    @else
                    <a href="#" class="res" id="dropdown4">{{ Auth::user()->name }}  <i class="fa fa-caret-down"></i> </a>
                    <div class="dropdown-content-nav" id="dropdown-content4">
                        <a href="{{url('seeker/profile')}}">Update Profile</a>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off" aria-hidden="true"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>

                @endguest
            </div>


            <span style="font-size:26px;cursor:pointer" class="open-nav" onclick="openNav()">&#9776; </span>
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
                    <div><a href="#" class="footer-link">Security</a></div>
                    <div><a href="{{url('/policy')}}" class="footer-link">Policy</a></div>
                    <div><a href="{{url('/terms')}}" class="footer-link">Terms of Us</a></div>
                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <h5 class="footer-title">About Us</h5>
                    <div><a href="http://" class="footer-link">Career with Us</a></div>
                    <div><a href="javascript:void();" class="footer-link" data-toggle="modal" data-target=".sendFeedback">Send Feedback</a></div>
                    <p class="footer-link">Please write your email and get our new jobs</p>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{url('seeker/putEmailForSubscribe')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="Email" value="{{old('email')}}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    <div class="modal fade sendFeedback" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <form action="{{url('')}}" method="post">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Send Feedback</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-center" style="font-weight: 600;
                                        font-style: italic;">We would like your feedback to improve our website.</p>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" name="" id="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Message</label>
                                            <textarea name="" id="" cols="20" rows="6" class="form-control"></textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-secondary">Cancle</button>
                                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="copyright-footer">
    <div class="container">
        <p class="text-center copyright">&copy; 2020 MyCareers- All Rights Reserved</p>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/searcharea.js')}}"></script>
<script src="{{asset('js/template.js')}}"></script>
<script src="https://kit.fontawesome.com/a75f6596a2.js" crossorigin="anonymous"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "80%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    $(document).ready(function(){
        $('#dropdown1').click(function(){
            $('#dropdown-content1').slideToggle('slow');
        })
        $('#dropdown2').click(function(){
            $('#dropdown-content2').slideToggle('slow');
        })
        $('#dropdown3').click(function(){
            $('#dropdown-content3').slideToggle('slow');
        })
        $('#dropdown4').click(function(){
            $('#dropdown-content4').slideToggle('slow');
        })
    })
</script>
@stack('script')

</body>
</html>
