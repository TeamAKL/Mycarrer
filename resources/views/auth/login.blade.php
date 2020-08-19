@extends('layouts.master')
@section('content')
<div class="container my-5">
    <div class="form-title">
        @if(Route::currentRouteName() == 'seekerlogin')
        <h3 class="text-center">Seeker Login Form</h3>
        @else
        <h3 class="text-center">Employer Login Form</h3>
        @endif
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="post" action="{{ route('login') }}">
                @csrf
                <input type="hidden" name="route_name" value="{{Route::currentRouteName() == 'seekerlogin' ? 'seeker/login' : 'employer/login'}}">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword1" placeholder="Password">
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberme">
                    <label class="form-check-label" for="rememberme">
                        Remember Me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                <div class="row">
                    <div class="col-md-6 text-left">
                    <a href="{{url('seeker/getUserEmail')}}" class="text-danger">Forgot Password?</a>
                    </div>
                    <div class="col-md-6 text-right">
                        @if(Route::currentRouteName() == 'seekerlogin')
                        <a href="{{url('seeker/register')}}" >Sign Up!</a>
                        @else
                        <a href="{{url('employer/register')}}">Sign Up!</a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(window).on('load', function() {
        if(window.location.pathname == '/employer/login') {
            swal("Super Promotion Period. Till November-30-2020");
        }
    });
</script>
@endpush
