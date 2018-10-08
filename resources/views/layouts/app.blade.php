<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- title name must be change -->
    <title>{{__('E-Commerce' ) }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="https://duin9q2mqqbim.cloudfront.net/common/images/favicon.ico">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/main.css')}}">

</head>
<body>
    <div id="app"> 
        <!-- Start Upper Bar --> 
        <div class="upper-bar">
            <div class="container">
                <div class="row">
                    @guest
                    <!-- Right Side Of Upper Bar -->
                    <div class="col-sm text-center text-sm-right">
                         <!-- Authentication Links Route between login and singup for guest user -->
                        <a class="nav-link d-inline pr-0 dash-login" href="{{ route('login') }}">{{ __('Login') }}</a>
                        <a class="nav-link d-inline pl-0" href="{{ route('register') }}">{{ __('Signup') }}</a>
                    </div>
                    @else
                    <!-- Left Side Of Upper Bar -->
                    <div class="col-sm text-center text-sm-left">
                        <div class="dropdown">
                            <img class="img rounded-circle"src="{{asset('storage/users/'.Auth::user()->image)}}" alt="user image" height="40px" width="40px">
                            <button class="btn btn-muted dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->username }} 
                                <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu bg-primary" aria-labelledby="dropdownMenuButton">
                                <!--must be route('myprofile') -->
                                <a class="dropdown-item text-white" href="{{route('account.profile.index') }}">My Profile</a>
                                <!--must be route('createitem') -->
                                <a class="dropdown-item text-white" href="{{route('account.product.create') }}">New Item</a>
                                <!-- must be route('myitem') -->
                                <a class="dropdown-item text-white" href="{{route('account.product.index')}}">My Items</a>
                                <!-- logout -->
                                <a class="dropdown-item text-white" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>                                                           
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>                       
                    @endguest                    
                </div>
            </div>
        </div>
        <!-- End Upper Bar -->
        <!-- Start Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{('/')}}">
                    <span class="text-white-50">Homepage</span>
                </a>
                <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#main-nav"  aria-controls="navbarSupportedContent" aria-expanded="false"  aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="navbar-nav ml-auto">
                      @foreach($categoriesHeader as $category)
                        <li class="nav-item">
                            <a  href="{{ route('shop.category.show', $category->category_id) }}">
                                <span class="nav-link text-white-50">{{ $category->category_name }}</span>
                            </a>
                        </li>
                      @endforeach
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <main class="py-4 bg-light">
            @yield('content')
        </main>
    </div>
    <script src="{{asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>

</body>
</html>
