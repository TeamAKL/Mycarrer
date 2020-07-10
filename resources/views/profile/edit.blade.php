@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Edit Profile') }}</h5>
                </div>
                <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ __('Email address') }}</label>
                                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email address') }}" value="{{ old('email', auth()->user()->email) }}">
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>
                            <div class="form-group{{ $errors->has('handphone') ? ' has-danger' : '' }}">
                                <label>{{ __('Hand Phone') }}</label>
                                <input type="text" name="handphone" class="form-control{{ $errors->has('handphone') ? ' is-invalid' : '' }}" placeholder="{{ __('Hand Phone Number') }}" value="09791963594">
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>
                            <div class="form-group{{ $errors->has('officephone') ? ' has-danger' : '' }}">
                                <label>{{ __('Office phone') }}</label>
                                <input type="text" name="officephone" class="form-control{{ $errors->has('officephone') ? ' is-invalid' : '' }}" placeholder="{{ __('Office phone number') }}" value="09791963504">
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Password') }}</h5>
                </div>
                <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        @method('put')

                        @include('alerts.success', ['key' => 'password_status'])

                        <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                            <label>{{ __('Current Password') }}</label>
                            <input type="password" name="old_password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'old_password'])
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label>{{ __('New Password') }}</label>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="form-group">
                            <label>{{ __('Confirm New Password') }}</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm New Password') }}" value="" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Change password') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                              <div class="profile-sec mb8">
                                <div class="user-imgname">
                                    <div class="profile-avatar avatar-dashboard">
                                        <img class="avatar" src="{{ asset('black') }}/img/emilyz.jpg" alt="">
                                        <label for="avatar" class="camera-btn">
                                            <input type="file" name="" id="avatar">
                                            <i class="fa fa-camera"></i>
                                        </label>
                                    </div>
                                    <div class="user-name">
                                        <h5 class="title">{{ auth()->user()->name }}</h5>

                                    </div>
                                </div>
                                    <!-- <div class="profile-avatar avatar-dashboard">
                                        <img class="avatar" src="{{ asset('black') }}/img/emilyz.jpg" alt="">
                                        <label for="avatar" class="camera-btn">
                                            <input type="file" name="" id="avatar">
                                            <i class="fa fa-camera"></i>
                                        </label>
                                    </div>
                                    <h5 class="title">{{ auth()->user()->name }}</h5> -->
                              </div>
                            </a>
                            <div class="clearb mt10">
                                <span class="fl fs-12 color-g-b" style="color:white;font-size:16px;"> {{ __('Ceo/Co-Founder') }}  </span>
                                  <a data-toggle="modal" data-target=".bd-example-modal-sm">
                                    <i class="tim-icons icon-pencil" style="color:white;margin-left:10px;cursor:pointer;"></i>
                                  </a>

                                    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Role:</label>
                                                <input type="text" class="form-control" id="recipient-name" placeholder="CEO/Co-Founder" style="color:black;">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </div>

                                    </div>
                                    </div>
                            </div>
                            
                        </div>
                    </p>
                    <div class="card-description">
                      <a data-toggle="modal" data-target="#exampleModal" style="cursor:pointer;">
                        {{ __('Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...') }}
                      </a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">About</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <div class="form-group">
                                    <textarea name="about" id="about" style="width:460px;height:300px;">Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...              
                                    </textarea>
                                </div>
                                
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <button class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    


    </div>
@endsection

@push('stylesheet')
<link rel="stylesheet" href="{{asset('css/employer_profile.css')}}">

@endpush

