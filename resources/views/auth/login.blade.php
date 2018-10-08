@extends('layouts.app')

@section('content')
<!--Login Form-->
<section class="signup-form bg-light"style="">	
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-header bg-light border-0">
                        <div class="row bg-light">
                            <!-- Auth Links In Login Form -->
                            <div  class="col-6 pr-0 text-sm-right text-center pad">
                                <a href="" class="nav-link d-inline text-primary">Login</a>
                            </div>	
                            <div class="col-6 pl-0 text-sm-left text-center">
                                <!-- route to singup-->
                                <a href="{{route('register')}}" class="nav-link d-inline text-muted">Signup</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-light border-0">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row justify-content-sm-center">
                                <div class="col-md-12 col-sm-8">
                                    <span>
                                        <i class="fas fa-asterisk validate-asterisk" aria-hidden="true"></i>
                                    </span>
                                    <input placeholder="Type your username" id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <!-- password login -->
                            <div class="form-group row justify-content-sm-center">
                                <div class="col-md-12 col-sm-8">
                                    <span>
                                        <i class="fas fa-asterisk validate-asterisk" aria-hidden="true"></i>
                                    </span>
                                    <input  placeholder="Type your password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                     @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0 justify-content-sm-center">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary w-100">
                                        {{ __('Login') }}
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
<!--Login Form-->
@endsection
