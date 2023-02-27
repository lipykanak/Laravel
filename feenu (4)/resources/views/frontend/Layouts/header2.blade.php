<!DOCTYPE html>
<html>
<head> 
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0">
    <link rel="icon" href="{{url('frontend/images/logo/logo.png')}}" type="images/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap_v4.3.1_min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.default.min.css')}}" type="text/css">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/custom.css')}}" type="text/css">
</head>
<body>
<header>
<div class="nit-upper-nav">
    <div class="container">
        <div class="nit-flex">
            <div class="logo navbar-dark">
                <a href="{{url('/')}}"><img class="ing-fluid" src="{{url('frontend/images/logo/logo.png')}}"> </a>
                <button class="navbar-toggler">
                    <i class="fas fa-bars"></i>
                    <span>Menu</span>
                </button>
            </div>
            <div class="nit-right">
               <div class="nit-close"><i class="fas fa-times"></i></div>
                <ul>
                    <li>
                        <span class="menuBtn">CATEGORIES <i class="fas fa-caret-up"></i></span>
                        <div class="sub-menu">
                 <ul>
                    <li><a href="#">Adventure</a>
                    </li>
                    <li><a href="#">sports</a>
                    <li><a href="#">Arcade</a></li>
                    <li><a href="#">girls</a></li>
                    <li><a href="#">action</a></li>
                    <li><a href="#">strategy</a></li>
                    <li><a href="#">rpg</a></li>
                    <li><a href="#">puzzle</a></li>
                    <li><a href="#">fighting</a></li>
                    <li><a href="#">shooting</a></li>
                    <li class="current-menu-item"><a href="{{('/casual')}}">casual</a></li>
                    <li><a href="#">racing</a></li>
                    <li><a href="#">board</a></li>
                    <li><a href="#">IQ</a></li>
                </ul>
                        </div>
                    </li>
                    <li>
                        <form action="">
                            <input type="search" placeholder="Search">
                            <input type="submit">
                        </form>
                    </li>
                        <li>
                            <div class="nit-userAc">
                                <span><i class="fas fa-user-circle"></i> {{ Auth::user()->name }}</span>
                                <div class="nit-dropdown">
                                    <a href="{{url('/login')}}">Login</a>
                                    <a href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout                </a>
                                </div>
                            </div>
                        </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="nit-nav-main">
    <div class="container">
        <div class="nit-navigation">
            <div class="nit-close-btn">
                <span class="nit-close"><i class="fas fa-times"></i></span>
            </div>
            <div class="menu-main-menu-container">
                <ul>
                    <li><a href="#">Adventure</a>
                    </li>
                    <li><a href="#">sports</a>
                    <li><a href="#">Arcade</a></li>
                    <li><a href="#">girls</a></li>
                    <li><a href="#">action</a></li>
                    <li><a href="#">strategy</a></li>
                    <li><a href="#">rpg</a></li>
                    <li><a href="#">puzzle</a></li>
                    <li><a href="#">fighting</a></li>
                    <li><a href="#">shooting</a></li>
                    <li class="current-menu-item"><a href="{{('/casual')}}">casual</a></li>
                    <li><a href="#">racing</a></li>
                    <li><a href="#">board</a></li>
                    <li><a href="#">IQ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="newMobileMenu">
   <div class="nit-close-btn">
        <span class="nit-close"><i class="fas fa-times"></i></span>
    </div>
    <div class="nit-search-form">
        <form action="">
            <input type="search" placeholder="Search Games">
            <input type="submit">
        </form>
    </div>
    <div class="box">
        <i class="fas fa-user"></i>
        <a href="{{url('/loginmobile')}}" class="btn">Login</a>
        <a href="{{url('/signup')}}" class="btn btn2">New Account</a>
    </div>
</div>
</header>
<main>