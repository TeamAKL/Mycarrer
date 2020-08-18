@extends('layouts.master')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{url('seeker/putEmailForForgotPass')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                            <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="Email" value="{{old('email')}}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">{{ $errors->first('email') }}</span>
                            @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
   @if(session()->has('success'))
   swal("Success!", "Password reset link has been successfully sent to your mail.Please check!", "success");
      @elseif(session()->has('error'))
      swal("Fail!", "Email does not exist.", "error");
        @endif
    </script>
@endpush




