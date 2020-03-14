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
        <div class="jumbotron jumbotron-fluid bg-jumbotron">
            <div class="container">
                <div class="banner-header">
                    <h2>Find Better. Faster with Mycareer</h2>
                    <div class="search-close">
                        <i class="fa fa-times" aria-hidden="true" id="close-icon"></i>
                    </div>
                </div>
                <div class="search-engin">
                    <form class="user-search-form">
                        <div class="form-row">
                            <div class=" input-group mb-2 mr-sm-2 col-md-4">
                                <div class="input-group-prepend ">
                                    <div class="input-group-text custom-input"><i class="fa fa-search" aria-hidden="true"></i></div>
                                </div>
                                <input type="text" id="search" class="form-control custom-input" placeholder="Search by Skills, Company & Job Title">
                            </div>
                            <div class="input-group mb-2 mr-sm-2 col-md-3">
                                <div class="input-group-prepend ">
                                    <div class="input-group-text custom-input"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                </div>
                                <input type="text" class="form-control custom-input" id="location" placeholder="Location">
                            </div>
                            <div class="col-md-3">
                                <select class="form-control custom-input" id="selectoption">
                                    <option>Default select</option>
                                    <option>Default select</option>
                                    <option>Default select</option>
                                </select>
                            </div>
                            {{-- Custom Select --}}
                            {{-- <div class="custom-select col-md-3">
                                <select class="custom-input" style="display:none;">
                                    <option value="0">Select car:</option>
                                    <option value="1">Audi</option>
                                    <option value="2">BMW</option>
                                    <option value="3">Citroen</option>
                                    <option value="4">Ford</option>
                                    <option value="5">Honda</option>
                                    <option value="6">Jaguar</option>
                                    <option value="7">Land Rover</option>
                                    <option value="8">Mercedes</option>
                                    <option value="9">Mini</option>
                                    <option value="10">Nissan</option>
                                    <option value="11">Toyota</option>
                                    <option value="12">Volvo</option>
                                </select>
                            </div> --}}
                            {{-- Custom Select --}}
                            <div class="col-md-2">
                                <input type="submit" value="Search" class="custom-btn ">
                            </div>
                        </div>
                    </form>
                    <a href="http://" class="search-model d-flex justify-content-end">Advanced Search</a>
                </div>
            </div>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/searcharea.js')}}"></script>
        @stack('script')
    </body>
    </html>
