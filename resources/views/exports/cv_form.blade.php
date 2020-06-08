<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>CV FORM</title>
    <style>
        .current-user {
            float: left;
        }
        .right {
            float: right;
            text-align: left;
            width: 380px;
        }
        .clear {
            clear: both;
        }
        .parent {
            width: 500px;
        }
        .name {
            margin-bottom: 0 !important;
            font-size: 19px;
            font-weight: 600;
        }
        .position {
            color: #224af8;
        }
        .designation {
            font-weight: 500;
            font-size: 17px;
        }
        .organisation {
            color: #224af8;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body style="background-color: white !important;">
<div class="content-frame">
{{--    {{$user['projects']}};--}}
    <div class="content">
{{--        @dd(asset('images/adele.jpg'));--}}
        <div class="parent">
            <img src="{{asset('images/adele.jpg')}}" alt="No Image Found" class="current-user" width="100px" height="100px">
            <div class="right">
                <p class="name">Thet Tun</p><p class="position">Full Stack Web Developer</p>
            </div>
        </div>
        <p class="clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam assumenda consequatur ea eligendi facere illum libero maxime numquam perspiciatis porro provident quaerat rem suscipit veritatis vero, vitae, voluptas! Maiores, vitae?</p>

            @if(isset($user['work_experiences']))
            <div>
        <h3>Work Experience</h3>

            @foreach($user['work_experiences'] as $workExperience)
                <div>
                  <p class="designation">{{$workExperience['desigination']}} | <span class="organisation">{{$workExperience['organisation']}}</span></p>
                    <label class="text-muted">From {{$workExperience['work_from']}} to {{$workExperience['work_till']}}</label>
                    <p> {{$workExperience['profile_detail']}}</p>
                </div>
                @endforeach

        </div>
        @endif
        @if(isset($user['work_experiences']))
        <div>
            <h3>PERSONAL PARTICULAR</h3>
            <table class="table table-bordered table-striped">
                <tbody>
                <tr>
                    <td>Name</td>
                    <td>{{isset($user['name']) ? $user['name'] : ''}}</td>
                </tr>

                <tr>
                    <td>Phone No</td>
                    <td>09686334745</td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>{{isset($user['email']) ? $user['email'] : ''}}</td>
                </tr>

                <tr>
                    <td>Website</td>
                    <td>http://thettun.  zwelab  .com/</td>
                </tr>

                <tr>
                    <td>Nationality</td>
                    <td>Myanmar</td>
                </tr>

                <tr>
                    <td>Religion</td>
                    <td>Buddhism</td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td>Male</td>
                </tr>

                <tr>
                    <td>Date of Birth</td>
                    <td>17 – 0 4 - 1997</td>
                </tr>

                <tr>
                    <td>Notice Period</td>
                    <td>immediate</td>
                </tr>
                </tbody>
            </table>
        </div>
        @endif
        @if(isset($user['education']))
        <div>
            <h3>Education</h3>
                @foreach($user['education'] as $education)
                    <div>
                        <label>{{$education['qualification']}}( {{$education['specilization']}} ) , {{$education['institute']}} </label>
                    </div>
                @endforeach
        </div>
        @endif
        @if($user)
            <div>
                <h3>  Skills</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cupiditate debitis dolore error fuga in ipsa laudantium mollitia optio perspiciatis quaerat quod totam, voluptas. Blanditiis cum in maxime quas ut!</p>
            </div>
        @endif

        @if($user)
            <div>
                <h3>IT Skills</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus cupiditate debitis dolore error fuga in ipsa laudantium mollitia optio perspiciatis quaerat quod totam, voluptas. Blanditiis cum in maxime quas ut!</p>
            </div>
        @endif
        @if($user)
            <div>
                <h3>Project Summery</h3>
                @foreach($user['projects'] as $key=>$project)
                    <div>
                        <h5>({{$key+1}}) {{$project['title']}}</h5>
                        <p>{{$project['detail']}}</p>
                        <a href="{{$project['link']}}">{{$project['link']}}</a>
                    </div>
                    <br>
                @endforeach
            </div>
        @endif




        <div class="page-break"></div>
    </div>
</div>
<div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, aut beatae dicta dolore earum esse et eum fuga itaque modi nam omnis placeat quaerat quia repellat saepe sequi ut vel?</p></div>
</body>
</html>
