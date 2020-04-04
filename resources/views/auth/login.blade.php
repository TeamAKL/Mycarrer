@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row d-flex align-items-start">
        <div class="col-md-4">
            {{-- <div class="card"> --}}
                <h4 class="text-md-center"><b>Login</b></h4>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail') }}</label>
                        <div class="form-group row">
                            <div class="input-group col-md-12">
                                <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" autocomplete="email" autofocus
                                placeholder="Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                autocomplete="current-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10 offset-md-4">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="submit" value="Login" class="btn btn-primary" title="MyCarrer Sign In"
                                style="width: 100%;background-color: #015ea1">
                            </div>
                        </div>

                        <div class="text-md-center">
                            <div class="col-md-12">
                                Or
                            </div>
                        </div>
                        {{-- <hr> --}}
                        <div class="d-flex justify-content-center">
                        <a href="{{route('register')}}" class="singup_btn text-md-center">New Member ? Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endpush
@endsection
