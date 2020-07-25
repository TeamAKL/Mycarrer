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
{{--        <img src="http://mycareer.com/public/images/seeker_profile/defaultavator.webp" alt="" class="current-user">--}}
        <div class="parent">
            @if(isset($user->profile_details) && $user->profile_details->profile_image != null)
                <img src="{{asset('images/seeker_profile/'.$user->profile_details->profile_image)}}" alt="No Image Found" class="current-user" width="100px" height="100px">
                @else
                <img src="{{asset('images/adele.jpg')}}" alt="No Image Found" class="current-user" width="100px" height="100px">
                @endif
            <div class="right">
                <p class="name">{{$user->name}}</p><p class="position">{{isset($user->job_preferences) ? $user->job_preferences->role != null ? $user->job_preferences->role : "" : "" }}</p>
            </div>
        </div>
        <p class="clear">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam assumenda consequatur ea eligendi facere illum libero maxime numquam perspiciatis porro provident quaerat rem suscipit veritatis vero, vitae, voluptas! Maiores, vitae?</p>

            @if(isset($user['work_experiences']))
            <div>
        <h3>Work Experience</h3>

            @foreach($user['work_experiences'] as $workExperience)
                <div>
                  <p class="designation">{{$workExperience['desigination']}} | <span class="organisation">{{$workExperience['organisation']}}</span></p>
                    <label class="text-muted">From {{$workExperience['work_from']}} to {{$workExperience['work_till'] == null ? 'Present' : '' }}</label>
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
                    <td>{{$user['name']}}</td>
                </tr>

                <tr>
                    <td>Phone No</td>
                    <td>{{$user['phone_number']}}</td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>{{$user['email']}}</td>
                </tr>

                <tr>
                    <td>Nationality</td>
                    <td>{{isset($user->profile_details) ? $user->profile_details->nationality != null ? $user->profile_details->nationality : "" : "" }}</td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td>{{isset($user->profile_details) ? $user->profile_details->gender != null ? $user->profile_details->gender : "" : "" }}</td>
                </tr>

                <tr>
                    <td>Date of Birth</td>
                    <td>{{isset($user->profile_details) ? $user->profile_details->date_of_birth != null ? $user->profile_details->date_of_birth : "" : "" }}</td>
                </tr>

                <tr>
                    <td>Notice Period</td>
                    <td>{{isset($user->job_preferences) ? $user->job_preferences->notice_period != null ? $user->job_preferences->notice_period : "" : "" }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        @endif
        @if(isset($user['education']))
        <div>
            <h3>Education</h3>
                @foreach($user['education'] as $key=>$education)
                    <div>
                        <label>({{$key+1}}) {{$education['qualification']}}( {{$education['specilization']}} ) , {{$education['institute']}} </label>
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
