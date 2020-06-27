@extends('layouts.master')
@section('content')
<div class="container">
    @if(Route::currentRouteName() == 'seekerRegister')
    <h3 class="text-center pt-5">Seekers Registration</h3>
    @elseif(Route::currentRouteName() == 'employerRegister')
    <h3 class="text-center pt-5">Employers Registration</h3>
    @endif
    <div class="row my-5">
        <div class="col-md-6 offset-md-3">
            <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if(Route::currentRouteName() == 'seekerRegister')
                @include('auth.seeker_form')
                @elseif(Route::currentRouteName() == 'employerRegister')
                @include('auth.employer_form')
                @endif
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
