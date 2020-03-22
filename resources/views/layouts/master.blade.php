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
                   <a href="{{url("/")}}" class="monster-logo">
                        <img src="{{asset('images/monster-logo.svg')}}" alt="">
                    </a>
                </div>
                <div class="nav-wapper">
                    <ul class="custom-nav-items">
                        <li class="dropdown">
                            <a href="" class="dropbtn">JOB SEARCH</a>
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
                            <a href="" class="dropbtn">BLOG</a>
                            <div class="dropdown-content">
                                <a href="#"> NEWS</a>
                                <a href="#">JS TOOLKITS</a>
                                <a href="#">EMPLOYER TOOLKITS</a>
                                <a href="#">HOW TO LOGIN</a>
                                <a href="#">HOW TO POST</a>

                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropbtn">ABOUT</a>
                            <div class="dropdown-content">
                                <a href="#">JOB SEEKERS TOOLKITS</a>
                                <a href="#">EMPLOYER TOOLKITS</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="login-section-nav">
                        <li class="nav-link">
                            <a href="{{url('login')}}" class="cbtn nav-link-name"><i class="fa fa-user" aria-hidden="true"></i>Login</a>
                        </li>
                        <li class="nav-link" id="one"><a href="" class="cbtn nav-link-name"><i class="fa fa-users" aria-hidden="true"></i>Employer Login</a>
                            <div class="dropdown-content">
                                <a href="#">JOB SEEKERS TOOLKITS</a>
                                <a href="#">EMPLOYER TOOLKITS</a>
                            </div>
                        </li>
                    </ul>
                </div>    
            </div>
        </div>
    </header>

        <div class="custom-margin">
            @yield('content')
        </div>

        <!---- Footer --->
        <div class="footer-social mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">Logo in SS</div>
                    <div class="col-md-3">
                        <a href="tel:+"><i class="fa fa-phone-square social-font" aria-hidden="true"></i>099999997</a>
                    </div>
                    <div class="col-md-3"><a href="mailto:"><i class="fa fa-envelope-o social-font" aria-hidden="true"></i>info@mycareer.com</a></div>
                    <div class="col-md-3 last-social-items">
                        <a href="mailto:" class="pl"><i class="fa fa-twitter-square social-font-l" aria-hidden="true"></i></a>
                        <a href="mailto:" class="pl"><i class="fa fa-facebook-square social-font-l" aria-hidden="true"></i></a>
                        <a href="http://" class="pl"><i class="fa fa-linkedin-square social-font-l" aria-hidden="true"></i></a>
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
                            <a href="http://" class="d-block footer-link">Job Search</a>
                            <a href="http://" class="d-block footer-link">Log In</a>
                            <a href="http://" class="d-block footer-link">Upload Resume</a>
                            <a href="http://" class="d-block footer-link">Free Job Alert</a>
                            <a href="http://" class="d-block footer-link">Find Companies</a>
                            <a href="http://" class="d-block footer-link">Help</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <h5 class="footer-title">Employers</h5>
                            <a href="http://" class="d-block footer-link">Employer Log In</a>
                            <a href="http://" class="d-block footer-link">Job Posting</a>
                            <a href="http://" class="d-block footer-link">Access Resume Database</a>
                            <a href="http://" class="d-block footer-link">Advertise with Us</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <h5 class="footer-title">Legal</h5>
                            <a href="http://" class="d-block footer-link">Security</a>
                            <a href="http://" class="d-block footer-link">Policy</a>
                            <a href="http://" class="d-block footer-link">Terms of Us</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <h5 class="footer-title">About Us</h5>
                            <a href="http://" class="d-block footer-link">Career with Us</a>
                            <a href="http://" class="d-block footer-link">Send Feedback</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-footer">
            <div class="container">
                <p class="copyright">&copy; 2020 MyCareer- All Rights Reserved</p>
            </div>
        </div>

        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/searcharea.js')}}"></script>
        @stack('script')
    </body>
    </html>
