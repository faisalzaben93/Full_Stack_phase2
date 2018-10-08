@extends('layouts.app')

@section('content')
<!-- Edit Profile Form -->
<section class="signup-form ">	
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h1 class="text-title text-secondary text-center px-0">Edit Profile</h1>
            <div class="card border-primary bg-light">
                <div class="card-header bg-primary py-0">
                  <div class="row">
                    <div  class="col col-md-12">
                      <p  class="text-title text-white justify-content-left">Edit User</p>
                     </div>	
                    </div>
                </div>
                <div class="card-body">
                  <!-- must route to editprofile -->
                    <form method="POST" action="{{ route('account.profile.update', Auth::id()) }}"> 
                    @method('PUT')
                    @csrf
                          <div class="row">
                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('user name') }}</label>
                                    <div class="col-md-6">
                                        <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ $user->username ?? old('username') }}" required autofocus>
                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email ?? old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                    <div class="col-md-6">
                                    <input id="password" value="{{$user->password}}" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                    <div class="col-md-6">
                                        <input id="password-confirm" value="{{$user->password}}" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                <div class="col-md-4 text-md-right">
                                    <label for="image" >Image</label>
                                </div>
                                <div class="col-md-8">
                                    <!-- must retuen image and store image-->
                                    <input id="image" type="file" class="form-control border-muted" name="image" value=""
                                    onchange="document.getElementById('image1').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group row">
                                <div class="card">
                                <img id="image1"class="img-thumbnail" src="{{asset('storage/users/'.Auth::user()->image)}}" alt="Card image cap" width="195px" height="195px"onerror="this.src='/img/defaultUser.PNG'" >
                                </div>
                            </div>3
                            </div>                           
                                <div class="form-group row mb-0">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9 ">
                                         <button type="submit" class="btn btn-primary">save</button>
                                    </div>
                                </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>	
<!-- Edit Profile Form -->
@endsection
