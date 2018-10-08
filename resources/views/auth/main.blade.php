@extends('layouts.app')

@section('content')	
<!-- Singup Form -->
    <section class="signup-form bg-light">	
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card border-0 bg-light">
                        <div class="card-header bg-light border-0">
                        <!-- Auth Links In Singup Form -->
                            <div class="form-group row justify-content-sm-center">
                                <div class="col-6 pr-0 pad text-sm-right text-center">
                              	  <a href="{{route('login')}}" class="nav-link d-inline text-muted">Login</a>
                                </div>	
                                <div class="col-6  pl-0 text-sm-left text-center">
                                    <a href="" class="nav-link d-inline text-success">Signup</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-light border-0">
                            <form enctype="multipart/form-data" method="POST" action="{{ url('change/password') }}">
                                @csrf
                                <!-- username -->
                                <div class="form-group row justify-content-sm-center">
                                    <div class="col-md-12 col-sm-8">
                                        <span>
                                            <i class="fas fa-asterisk validate-asterisk" aria-hidden="true"></i>
                                        </span>
                                        <input placeholder="Type your username" id="username" type="text" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>	
                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif									   
                                    </div>
                                </div>
                                <!-- password -->								
                                <div class="form-group row justify-content-sm-center">
                                    <div class="col-md-12 col-sm-8">
                                        <span>
                                            <i class="fas fa-asterisk validate-asterisk" aria-hidden="true"></i>
                                        </span>
											<input placeholder="Type a Complex password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="passwordol"  required>
											
											@if ($errors->has('passwordold'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('passwordold') }}</strong>
											</span>
										@endif
                                    </div>
                                </div>
                                <!-- confirm-password -->
                                <div class="form-group row justify-content-sm-center">
                                    <div class="col-md-12 col-sm-8">
                                        <span>
                                            <i class="fas fa-asterisk validate-asterisk" aria-hidden="true"></i>
                                        </span>
                                        <input placeholder="Type a password again" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                                <!-- email -->
                                <div class="form-group row justify-content-sm-center">
                                    <div class="col-md-12 col-sm-8">
                                        <input placeholder="Type a Valid email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="" required>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- Username Image // image must validate 
                                    .extenstion after lastindexof('.')-->
                                <div class="form-group row justify-content-sm-center">
                                    <div class="col-md-6 col-sm-4">
                                        <input id="image" type="file" class="form-control" name="image" value=""
                                        onchange="document.getElementById('image1').src = window.URL.createObjectURL(this.files[0])">
                                    </div>					
                                    <div class="col-md-6 col-sm-4">
                                        <img id="image1" class="img-thumbnail" src="{{ $user->has('image') ? ' is-invalid' : 'img/defaultUser.png' }}" alt="Username Singup Image" min-height="195px" min-width="195px">
                                    </div>
                                </div>
                                <!-- Signup Button-->
                                <div class="form-group row mb-0 justify-content-sm-center">
                                    <div class="col-md-12 col-sm-8"> 
                                        <button type="submit" class="btn btn-success w-100">
                                            Edit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection	
