
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0">
    <link rel="icon" href="<?php echo e(url('frontend/images/icons/icon.png')); ?>" type="images/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/bootstrap_v4.3.1_min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/owl.carousel.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/owl.theme.default.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/style.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(url('frontend/css/custom.css')); ?>" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
</head>
<body>
<header>
<div class="nit-upper-nav">
    <div class="container">
        <div class="nit-flex">
            <div class="logo navbar-dark">
                <a href="<?php echo e(url('/')); ?>"><img class="ing-fluid" src="<?php echo e(url('frontend/images/logo/logo.png')); ?>"> </a>
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

                             <?php echo $__env->make('frontend.Layouts.categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                            </ul>
                        </div>

                    </li>
                    <li>
                        <form action="">
                            <input type="search" class="search-games" placeholder="Search">
                            <input type="submit">
                        </form>
                    </li>
                        <li>
                            <?php if(session('status')): ?>
                            <div class="mb-4 font-medium text-sm text-green-600">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                            <div class="nit-userAc">

                                <?php if(Route::has('login')): ?>
                                <span><i class="fas fa-user-circle"></i><?php echo e(Auth::user()->name ?? 'Account'); ?></span>
                                <div class="nit-dropdown">

                                    <?php if(auth()->guard()->check()): ?>
                                    <?php if((Auth::user()->user_type)==2): ?>
                                    
                                    <a  href="<?php echo e(route('profile')); ?>">My Account</a>
                                    <a  href="<?php echo e(route('changepassword')); ?>">Change Password</a>

                                    <?php else: ?>
                                    <a  href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
                                    <?php endif; ?>


                                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" >
                                        <?php echo csrf_field(); ?>
                                        </form>
                                    </a>

                                <?php else: ?>

                                    <a href="<?php echo e(route('login')); ?>" >Log in</a>

                                    <?php if(Route::has('register')): ?>
                                        <a href="<?php echo e(route('register')); ?>" >New Account</a>
                                    <?php endif; ?>
                                <?php endif; ?>

                                </div>
                                <?php endif; ?>
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
                <?php echo $__env->make('frontend.Layouts.categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
        <a href="<?php echo e(url('/loginmobile')); ?>" class="btn">Login</a>
        <a href="<?php echo e(url('/signup')); ?>" class="btn btn2">New Account</a>
    </div>
</div>
</header>
<main>
<?php /**PATH D:\Xampp8.1\htdocs\test\feenu\resources\views/frontend/Layouts/header.blade.php ENDPATH**/ ?>