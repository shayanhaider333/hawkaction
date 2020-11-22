<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="./assets/css/bootstrap4/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="./assets/img/parallax.js"></script>
</head>
<body>  

@section('header')  
    <header class="site-header">
        <nav class="nav-bg navbar navbar-expand-lg fixed-top">
            <a href="index.html" class="navbar-brand"><img class="img-fluid" src="./assets/img/logo.png.png"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav">
            <i class="navbar-toggler-icon fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-around" id="nav">
                <ul class="navbar-nav home-nav">
                    <li class="nav-item" ><a class="active nav-link px-3 font-weight-bold" href="#">Logo design</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#">Digital</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#">Marketing</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#">Writing & Translation</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="/log">Video & Animation</a></li>
                </ul>
                <div class="form-inline justify-content-center"> 
                    <div class="input-group">
                    @guest
                        <span class="navbar-text font-weight-bold"><a href="{{ route('login') }}">{{ __('Sign in') }}</a></span>
                        @if (Route::has('register'))   
                        <a class="btn join-button" href="{{ route('register') }}" type="submit">{{ __('Join') }}</a>
                        @endif
                    @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('log') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('log') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>     
                </div>
            </div> 
        </nav>
    </header> <!-- Site Header --> 
@show
    
@yield('context')

   
@section('footer')
    <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md pb-4 footer-col">
                        <div class="category">
                            <a href="#"><h1>Categories</h1></a>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a href="#" class="nav-link">Graphics & Design</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Digital Marketing</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Writing & Translation</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Video & Animation</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Music & Audio</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Programming & Tech</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Business</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Lifestyle</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Sitemap</a></li>
                            </ul>
                        </div>
                    </div> <!--Column 1-->
                    <div class="col-md pb-4 footer-col">
                        <div class="category">
                            <a href="#"><h1>About</h1></a>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a href="#" class="nav-link">Careers</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Press & News</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Partnerships</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Privacy Policy</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Terms of Service</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Intellectual Property Claims</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Fiverr</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Investor Relations</a></li>
                            </ul>
                        </div>
                    </div> <!--Column 2-->     
                    <div class="col-md pb-4 footer-col">
                        <div class="category">
                            <a href="#"><h1>Support</h1></a>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a href="#" class="nav-link">Help & Support</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Trust & Safety</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Selling on Fiverr</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Buying on Fiverr</a></li>
                            </ul>
                        </div>
                    </div> <!--Column 3-->   
                    <div class="col-md pb-4 footer-col">
                        <div class="category">
                            <a href="#"><h1>Community</h1></a>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a href="#" class="nav-link">Events</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Forum</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Video & Animation</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Podcast</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Affiliates</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Invite a Friend</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Become a Seller</a></li>
                            </ul>
                        </div>
                    </div> <!--Column 4-->   
                    <div class="col-md footer-col">
                        <div class="category">
                            <a href="#"><h1>More From Fiverr</h1></a>
                            <ul class="nav flex-column">
                                <li class="nav-item"><a href="#" class="nav-link">Fiverr Pro</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Fiverr Studios</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Get Inspired</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">ClearVoice</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Content Marketing</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">AND CO</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Invoice Software</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Learn</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Online Courses</a></li>
                            </ul>
                        </div>
                    </div> <!--Column 5-->                                                             
                </div>
            </div>
    </footer> <!-- Site Footer -->

    <footer class="below-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 below-footer-col"> <!-- Column 1-->
                        <a href="index.html"><img class="img-fluid" src="./assets/img/footer-logo.png"></a>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </footer> <!---Below Footer-->
@show

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://kit.fontawesome.com/c38cbe3654.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/js-main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" type="text/javascript"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>