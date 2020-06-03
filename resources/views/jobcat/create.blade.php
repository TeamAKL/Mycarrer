@extends('layouts.app', ['page' => __('Job Category'), 'pageSlug' => 'job-category/create'])

@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="title">{{ __('Create Job Category') }}</h5>
    </div>
    <form method="post" action="{{ route('job-category.store') }}" autocomplete="off">
        <div class="card-body">
            @csrf
            {{-- @method('put') --}}

            @include('alerts.success', ['key' => 'password_status'])

            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                <label>{{ __('Category Name') }}</label>
                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Category Name') }}" >
                @include('alerts.feedback', ['field' => 'name'])
            </div>

            {{-- <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                <label>{{ __('New Password') }}</label>
                <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>
                @include('alerts.feedback', ['field' => 'password'])
            </div>
            <div class="form-group">
                <label>{{ __('Confirm New Password') }}</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm New Password') }}" value="" required>
            </div> --}}
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
        </div>
    </form>
</div>
@endsection


