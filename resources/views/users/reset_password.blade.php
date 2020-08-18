@extends('layouts.master')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{url('seeker/resetPassword')}}" method="post">
                    @csrf
                    <input type="hidden" value="{{$id}}" name="user_id"/>
                    <h3 style="text-align: center">Reset Password Form</h3>
                    <div class="form-group">
                        <label for="password" >New Password</label>
                            <input type="password" name="new_password"
                                   class="form-control {{ $errors->has('new_password') ? ' is-invalid' : '' }}" id="password"
                                   placeholder="Password">
                            @if ($errors->has('new_password'))
                                <span class="invalid-feedback" role="alert">{{ $errors->first('new_password') }}</span>
                            @endif

                    </div>
                    <div class="form-group">
                        <label for="confirmed_password">Confirmed New Password</label>
                            <input type="password" name="new_password_confirmation" class="form-control" id="confirmed_password"
                                   placeholder="Confirmed New Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
