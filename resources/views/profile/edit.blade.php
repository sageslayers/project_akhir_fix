<?php
$dateOfBirth = auth()->user()->users_details->users_details_birth ;
$years = \Carbon\Carbon::parse($dateOfBirth)->age;
$detail = auth()->user()->users_details;
$imgurl = Storage::url(auth()->user()->avatar);
?>

@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('This is your profile page. You can see the progress you\'ve made with your work and manage your projects or assigned tasks'),
        'class' => 'col-lg-7'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">

                                <a href="#">

                                    @if(session('tmp_img'))

                                    <img alt="Image placeholder" src="{{ session('tmp_img') }}">
                                    @else
                                    <img alt="Image placeholder" src="{{ auth()->user()->avatar }}">
                                        @endif
                                </a>


                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">

                            <a href="#" class="btn btn-sm btn-info mr-4">{{ __('Connect') }}</a>
                            <a href="#" class="btn btn-sm btn-default float-right">{{ __('Message') }}</a>
                        </div>
                    </div>

                    <div class="card-body pt-0 pt-md-4">

                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <div>
                                        <span class="heading">22</span>
                                        <span class="description">{{ __('Friends') }}</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">{{ __('Photos') }}</span>
                                    </div>
                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">{{ __('Comments') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                {{ auth()->user()->name }}<span class="font-weight-light">, {{$years}} Y.O </span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{$detail->users_details_province}} , {{$detail->users_details_country}}
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>{{auth()->user()->account_type}} - {{auth()->user()->identity_number}}
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>{{ $detail->users_details_school }}
                            </div>
                            <hr class="my-4" />
                            <p>{{ $detail->users_details_biography }}</p>
                            <a href="#">{{ __('Show more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Edit Profile') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('photo.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                    Avatar<br>

                                    <img src="{{auth()->user()->avatar}}" width="200" /><br><br>
                                    <input type="file" class="" name="avatar" > </a><br><br>
                                    <input type="submit" class="btn btn-sm btn-default" value ="Upload">
                        </form>
                        <hr class="my-4" />
                        <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>

                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif


                            <div class="pl-lg-4">
                            <div class="row" >
                                <div class="form-group col-md-6{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('birth') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-birth">{{ __('Birth Date') }}</label>
                                    <input type="date" name="users_details_birth" id="input-birth" class="form-control form-control-alternative{{ $errors->has('users_details_birth') ? ' is-invalid' : '' }}"   value={{ $detail->users_details_birth}} required >

                                    @if ($errors->has('birth'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('birth') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('school') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-school">{{ __('School') }}</label>
                                    <input type="text" name="users_details_school" id="input-school" class="form-control form-control-alternative{{ $errors->has('school') ? ' is-invalid' : '' }}" placeholder="{{ __('school') }}" value="{{ old('school', $detail->users_details_school) }}" required>

                                    @if ($errors->has('school'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('school') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="row">
                                <div class="form-group col-md-6{{ $errors->has('province') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-province">{{ __('Province') }}</label>
                                    <input type="text" name="users_details_province" id="input-province" class="form-control form-control-alternative{{ $errors->has('province') ? ' is-invalid' : '' }}" placeholder="{{ __('Province') }}" value="{{ old('province', $detail->users_details_province) }}" required>

                                    @if ($errors->has('province'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('province') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6{{ $errors->has('country') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-country">{{ __('Country') }}</label>
                                    <input type="text" name="users_details_country" id="input-country" class="form-control form-control-alternative{{ $errors->has('country') ? ' is-invalid' : '' }}" placeholder="{{ __('country') }}" value="{{ old('country', $detail->users_details_country) }}" required>

                                    @if ($errors->has('users_details_country'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('users_details_country') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                </div>
                                <div class="form-group{{ $errors->has('biography') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-biography">{{ __('Biography') }}</label>
                                   <textarea name="users_details_biography" id="input-biography" class="form-control form-control-alternative{{ $errors->has('biography') ? ' is-invalid' : '' }}" placeholder="{{ __('Biography') }}"  required >{{$detail->users_details_biography}}</textarea>

                                    @if ($errors->has('biography'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('biography') }}</strong>
                                        </span>
                                    @endif
                                </div>





                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>


                        <hr class="my-4" />

                        <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Password') }}</h6>

                            @if (session('password_status'))

                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('password_status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-current-password">{{ __('Current Password') }}</label>
                                    <input type="password" name="old_password" id="input-current-password" class="form-control form-control-alternative{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>

                                    @if ($errors->has('old_password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('old_password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('New Password') }}</label>
                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirm New Password') }}" value="" required>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Change password') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
