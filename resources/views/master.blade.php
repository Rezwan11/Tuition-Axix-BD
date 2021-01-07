<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLIGHT BOOK</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image"  href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    <div class="container-fluid">

        {{-- navbar --}}
        <div class="container-fluid bg-color-1 shadow-sm">
           <div class="container">
              <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand" href="{{ url('/') }}">
                      <img src="{{ asset('assets/img/logo.png') }}" alt=""> <b class="text-white">FLIGHT BOOK</b>
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item {{(Request::is('/')?'active':'')}}">
                        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{(Request::is('about')?'active':'')}}">
                        <a class="nav-link" href="{{ url('about') }}">About </a>
                    </li>                    
                    <li class="nav-item {{(Request::is('contact')?'active':'')}}">
                        <a class="nav-link" href="{{ url('contact') }}">Contact </a>
                    </li>

                </ul>

                <div class="ml-auto auth-section">
                    @if (Auth::check())
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{Auth::user()->first_name}}
                          </a>
                          <div class="dropdown-menu border-0 shadow" aria-labelledby="navbarDropdown">

                              <a class="dropdown-item" href="{{ url('home') }}"><i class="fa fa-user"></i> My Profile</a>
                         
                              <a class="dropdown-item" href="{{ url('my-flight') }}"><i class="fa fa-send-o"></i> My Flight</a>
                            
                              <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                               <i class="fa fa-lock"></i> {{ __('Logout') }}
                             </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                            </form>
                             
                          </div>
                      </li>
                  </ul>

                  @else
                  <a href="{{ url('/login') }}"><i class="fa fa-lock"></i> Login</a>
                  <a href="{{ url('/register') }}" class="ml-3"><i class="fa fa-user"></i> Register</a>
                  @endif
                    
                </div>


            </div>
        </nav>
    </div>
</div>



@yield('content')



<div class="container-fluid mt-100 footer">
    <div class="container">
        <div class="row">
        <div class="col-md-5">
            <img src="{{ asset('assets/img/logo.png') }}" class="w-25 mb-4"  alt="">
            <p>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
            </p>

            <div class="social-link">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-youtube"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-md-3">
            <h2>Quick Link</h2>
            <div class="footer-link">
                <a href="{{ url('about') }}"><i class="fa fa-angle-double-right"></i> About Us</a>
                <a href="{{ url('contact') }}"><i class="fa fa-angle-double-right"></i> Contact Us</a>
                <a href="{{ url('privacy-policy') }}"><i class="fa fa-angle-double-right"></i> Privacy & Policy</a>
                <a href="{{ url('term-condition') }}"><i class="fa fa-angle-double-right"></i> Term & Condition</a>
            </div>
        </div>
        <div class="col-md-3">
            <h2>Important Link</h2>
            <div class="footer-link">
                <a href="{{ url('home') }}"><i class="fa fa-angle-double-right"></i> Profile</a>
                <a href="{{ url('my-flight') }}"><i class="fa fa-angle-double-right"></i> My Flight</a>
                <a href="{{ url('login') }}"><i class="fa fa-angle-double-right"></i> Login</a>
                <a href="{{ url('register') }}"><i class="fa fa-angle-double-right"></i> Register</a>
            </div>
        </div>
    </div>

    <p class="text-center mt-5">&copy Copyright {{date('Y')}} FLIGHT BOOK All rights reserved.</p>
    </div>
</div>



</div>


 <script src="{{ asset('assets/js/jquery.js') }}"></script>   
 <script src="{{ asset('assets/js/popper.js') }}"></script>   
 <script src="{{ asset('assets/js/bootstrap.js') }}"></script>   
</body>
</html>