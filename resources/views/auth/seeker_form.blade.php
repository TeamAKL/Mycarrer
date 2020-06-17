<input type="hidden" name="role_id" value="0">
<div class="form-group row">
    <label for="name" class="col-sm-4 col-form-label">Name</label>
    <div class="col-sm-8">
    <input type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" placeholder="Name" value="{{old('name')}}">
        @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">{{ $errors->first('name') }}</span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="phone_number" class="col-sm-4 col-form-label">Phone Number</label>
    <div class="col-sm-8">
    <input type="text" name="phone_number" class="form-control {{ $errors->has('phone_number') ? ' is-invalid' : '' }}" id="phone_number" placeholder="Phone Number" value="{{old('phone_number')}}">
        @if ($errors->has('phone_number'))
        <span class="invalid-feedback" role="alert">{{ $errors->first('phone_number') }}</span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-sm-4 col-form-label">Email</label>
    <div class="col-sm-8">
    <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="Email" value="{{old('email')}}">
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">{{ $errors->first('email') }}</span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="password" class="col-sm-4 col-form-label">Password</label>
    <div class="col-sm-8">
        <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="Password">
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">{{ $errors->first('password') }}</span>
        @endif
    </div>

</div>
<div class="form-group row mb0">
    <label for="confirmed_password" class="col-sm-4 col-form-label">Confirmed Password</label>
    <div class="col-sm-8">
        <input type="password" name="password_confirmation" class="form-control" id="confirmed_password" placeholder="Confirmed Password">
    </div>
</div>
