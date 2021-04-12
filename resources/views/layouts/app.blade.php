{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Tweety') }}</title>--}}

{{--    <!-- Scripts -->--}}
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">--}}

{{--    <!-- Styles -->--}}
{{--    <link href="{{ asset('css/main.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--    <div id="app">--}}
{{--        <section class="px-8">--}}

{{--            <header class="container mx-auto">--}}
{{--                <a href="{{route('home')}}"><img--}}
{{--                    src="../images/logo.png"--}}
{{--                    alt="Tweety"--}}
{{--                    style="height:64px"--}}
{{--                    >--}}
{{--                </a>--}}
{{--            </header>--}}
{{--        </section>--}}

{{--        <section class="py-4">--}}
{{--            <main class="container mx-auto">--}}
{{--                <div class="lg:flex lg:justify-between">--}}
{{--                    @if(auth()->check())--}}
{{--                    <div class="w-1/6" >--}}
{{--                        @include('_sidebar-links')--}}
{{--                    </div>--}}
{{--                    @endif--}}
{{--                    <div class="lg:flex-1 lg:mx-10" style="max-width:700px">--}}
{{--                        @yield('content')--}}


{{--                    </div>--}}


{{--                        @if(auth()->check())--}}
{{--                    <div class="w-1/6 ">--}}
{{--                        @include('_friends-list')--}}
{{--                    </div>--}}
{{--                            @endif--}}

{{--                </div>--}}

{{--            </main>--}}
{{--        </section>--}}


{{--    </div>--}}

{{--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>--}}

{{--</body>--}}
{{--</html>--}}


    <!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="user/images/favicon.ico">

    <!-- CSS
	============================================ -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('user/css/vendor/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('user/css/vendor/bicon.min.css')}}">
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="{{asset('user/css/vendor/flaticon.css')}}">
    <!-- audio & video player CSS -->
    <link rel="stylesheet" href="{{asset('user/css/plugins/plyr.css')}}">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{asset('user/css/plugins/slick.min.css')}}">
    <!-- nice-select CSS -->
    <link rel="stylesheet" href="{{asset('user/css/plugins/nice-select.css')}}">
    <!-- perfect scrollbar css -->
    <link rel="stylesheet" href="{{asset('user/css/plugins/perfect-scrollbar.css')}}">
    <!-- light gallery css -->
    <link rel="stylesheet" href="{{asset('user/css/plugins/lightgallery.min.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">

</head>

<body>

<!-- header area start -->
<header>
    <div class="header-top sticky bg-white d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <!-- header top navigation start -->
                    <div class="header-top-navigation">
                        <nav>
                            <ul>
                                <li class="active"><a href="index.html">home</a></li>
                                <li class="msg-trigger"><a class="msg-trigger-btn" href="#a">message</a>
                                    <div class="message-dropdown" id="a">
                                        <div class="dropdown-title">
                                            <p class="recent-msg">recent message</p>
                                            <div class="message-btn-group">
                                                <button>New group</button>
                                                <button>New Message</button>
                                            </div>
                                        </div>
                                        <ul class="dropdown-msg-list">
                                            <li class="msg-list-item d-flex justify-content-between">
                                                <!-- profile picture end -->
                                                <div class="profile-thumb">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="user/images/profile/profile-small-3.jpg" alt="profile picture">
                                                    </figure>
                                                </div>
                                                <!-- profile picture end -->

                                                <!-- message content start -->
                                                <div class="msg-content">
                                                    <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default</p>
                                                </div>
                                                <!-- message content end -->

                                                <!-- message time start -->
                                                <div class="msg-time">
                                                    <p>25 Apr 2019</p>
                                                </div>
                                                <!-- message time end -->
                                            </li>
                                            <li class="msg-list-item d-flex justify-content-between">
                                                <!-- profile picture end -->
                                                <div class="profile-thumb">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="user/images/profile/profile-small-4.jpg" alt="profile picture">
                                                    </figure>
                                                </div>
                                                <!-- profile picture end -->

                                                <!-- message content start -->
                                                <div class="msg-content">
                                                    <h6 class="author"><a href="profile.html">Jhon Doe</a></h6>
                                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default</p>
                                                </div>
                                                <!-- message content end -->

                                                <!-- message time start -->
                                                <div class="msg-time">
                                                    <p>15 May 2019</p>
                                                </div>
                                                <!-- message time end -->
                                            </li>
                                            <li class="msg-list-item d-flex justify-content-between">
                                                <!-- profile picture end -->
                                                <div class="profile-thumb">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="user/images/profile/profile-small-5.jpg" alt="profile picture">
                                                    </figure>
                                                </div>
                                                <!-- profile picture end -->

                                                <!-- message content start -->
                                                <div class="msg-content">
                                                    <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default</p>
                                                </div>
                                                <!-- message content end -->

                                                <!-- message time start -->
                                                <div class="msg-time">
                                                    <p>20 Jun 2019</p>
                                                </div>
                                                <!-- message time end -->
                                            </li>
                                        </ul>
                                        <div class="msg-dropdown-footer">
                                            <button>See all in messenger</button>
                                            <button>Mark All as Read</button>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification-trigger"><a class="msg-trigger-btn" href="#b">notification</a>
                                    <div class="message-dropdown" id="b">
                                        <div class="dropdown-title">
                                            <p class="recent-msg">Notification</p>
                                            <button>
                                                <i class="flaticon-settings"></i>
                                            </button>
                                        </div>
                                        <ul class="dropdown-msg-list">
                                            <li class="msg-list-item d-flex justify-content-between">
                                                <!-- profile picture end -->
                                                <div class="profile-thumb">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="user/images/profile/profile-small-3.jpg" alt="profile picture">
                                                    </figure>
                                                </div>
                                                <!-- profile picture end -->

                                                <!-- message content start -->
                                                <div class="msg-content notification-content">
                                                    <a href="profile.html">Robert Faul</a>,
                                                    <a href="profile.html">william jhon</a>
                                                    <p>and 35 other people reacted to your photo</p>
                                                </div>
                                                <!-- message content end -->

                                                <!-- message time start -->
                                                <div class="msg-time">
                                                    <p>25 Apr 2019</p>
                                                </div>
                                                <!-- message time end -->
                                            </li>
                                            <li class="msg-list-item d-flex justify-content-between">
                                                <!-- profile picture end -->
                                                <div class="profile-thumb">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="user/images/profile/profile-small-4.jpg" alt="profile picture">
                                                    </figure>
                                                </div>
                                                <!-- profile picture end -->

                                                <!-- message content start -->
                                                <div class="msg-content notification-content">
                                                    <a href="profile.html">Robert mushkil</a>,
                                                    <a href="profile.html">Terry jhon</a>
                                                    <p>and 20 other people reacted to your photo</p>
                                                </div>
                                                <!-- message content end -->

                                                <!-- message time start -->
                                                <div class="msg-time">
                                                    <p>20 May 2019</p>
                                                </div>
                                                <!-- message time end -->
                                            </li>
                                            <li class="msg-list-item d-flex justify-content-between">
                                                <!-- profile picture end -->
                                                <div class="profile-thumb">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="user/images/profile/profile-small-6.jpg" alt="profile picture">
                                                    </figure>
                                                </div>
                                                <!-- profile picture end -->

                                                <!-- message content start -->
                                                <div class="msg-content notification-content">
                                                    <a href="profile.html">Horijon Mbala</a>,
                                                    <a href="profile.html">Bashu jhon</a>
                                                    <p>and 55 other people reacted to your post</p>
                                                </div>
                                                <!-- message content end -->

                                                <!-- message time start -->
                                                <div class="msg-time">
                                                    <p>15 Jan 2019</p>
                                                </div>
                                                <!-- message time end -->
                                            </li>
                                        </ul>
                                        <div class="msg-dropdown-footer">
                                            <button>See all in messenger</button>
                                            <button>Mark All as Read</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- header top navigation start -->
                </div>

                <div class="col-md-2">
                    <!-- brand logo start -->
                    <div class="brand-logo text-center">
                        <a href="index.html">
                            <img src="user/images/logo/logo.png" alt="brand logo">
                        </a>
                    </div>
                    <!-- brand logo end -->
                </div>

                <div class="col-md-5">
                    <div class="header-top-right d-flex align-items-center justify-content-end">
                        <!-- header top search start -->
                        <div class="header-top-search">
                            <form class="top-search-box">
                                <input type="text" placeholder="Search" class="top-search-field">
                                <button class="top-search-btn"><i class="flaticon-search"></i></button>
                            </form>
                        </div>
                        <!-- header top search end -->

                        <!-- profile picture start -->
                        <div class="profile-setting-box">
                            <div class="profile-thumb-small">
                                <a href="javascript:void(0)" class="profile-triger">
                                    <figure>
                                        <img src="{{asset("user/images/profile")}}/{{auth()->user()->profile_img}}" alt="profile picture">
                                    </figure>
                                </a>
                                <div class="profile-dropdown">
                                    <div class="profile-head">
                                        <h5 class="name"><a href="#">{{auth()->user()->name}}</a></h5>
                                        <a class="mail" href="#">{{auth()->user()->email}}</a>
                                    </div>
                                    <div class="profile-body">
                                        <ul>
                                            <li><a href="profile.html"><i class="flaticon-user"></i>Profile</a></li>
                                            <li><a href="#"><i class="flaticon-message"></i>Inbox</a></li>
                                            <li><a href="#"><i class="flaticon-document"></i>Activity</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#"><i class="flaticon-settings"></i>Setting</a></li>
                                            <li>
                                                <a
                                                    ref="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                >
                                                    <i class="flaticon-unlock"></i>Sign Out
                                                </a>
                                            </li>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- profile picture end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
<!-- header area start -->
<header>
    <div class="mobile-header-wrapper sticky d-block d-lg-none">
        <div class="mobile-header position-relative ">
            <div class="mobile-logo">
                <a href="index.html">
                    <img src="user/images/logo/logo-white.png" alt="logo">
                </a>
            </div>
            <div class="mobile-menu w-100">
                <ul>
                    <li>
                        <button class="notification request-trigger"><i class="flaticon-users"></i>
                            <span>03</span>
                        </button>
                        <ul class="frnd-request-list">
                            <li>
                                <div class="frnd-request-member">
                                    <figure class="request-thumb">
                                        <a href="profile.html">
                                            <img src="user/images/profile/profile-midle-1.jpg" alt="proflie author">
                                        </a>
                                    </figure>
                                    <div class="frnd-content">
                                        <h6 class="author"><a href="profile.html">merry watson</a></h6>
                                        <p class="author-subtitle">Works at HasTech</p>
                                        <div class="request-btn-inner">
                                            <button class="frnd-btn">confirm</button>
                                            <button class="frnd-btn delete">delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="frnd-request-member">
                                    <figure class="request-thumb">
                                        <a href="profile.html">
                                            <img src="user/images/profile/profile-midle-2.jpg" alt="proflie author">
                                        </a>
                                    </figure>
                                    <div class="frnd-content">
                                        <h6 class="author"><a href="profile.html">merry watson</a></h6>
                                        <p class="author-subtitle">Works at HasTech</p>
                                        <div class="request-btn-inner">
                                            <button class="frnd-btn">confirm</button>
                                            <button class="frnd-btn delete">delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="frnd-request-member">
                                    <figure class="request-thumb">
                                        <a href="profile.html">
                                            <img src="user/images/profile/profile-midle-3.jpg" alt="proflie author">
                                        </a>
                                    </figure>
                                    <div class="frnd-content">
                                        <h6 class="author"><a href="profile.html">merry watson</a></h6>
                                        <p class="author-subtitle">Works at HasTech</p>
                                        <div class="request-btn-inner">
                                            <button class="frnd-btn">confirm</button>
                                            <button class="frnd-btn delete">delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button class="notification"><i class="flaticon-notification"></i>
                            <span>03</span>
                        </button>
                    </li>
                    <li>
                        <button class="chat-trigger notification"><i class="flaticon-chats"></i>
                            <span>04</span>
                        </button>
                        <div class="mobile-chat-box">
                            <div class="live-chat-title">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="profile.html">
                                        <figure class="profile-thumb-small profile-active">
                                            <img src="user/images/profile/profile-small-15.jpg" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->
                                <div class="posted-author">
                                    <h6 class="author"><a href="profile.html">Robart Marloyan</a></h6>
                                    <span class="active-pro">active now</span>
                                </div>
                                <div class="live-chat-settings ml-auto">
                                    <button class="chat-settings"><img src="user/images/icons/settings.png" alt=""></button>
                                    <button class="close-btn"><img src="user/images/icons/close.png" alt=""></button>
                                </div>
                            </div>
                            <div class="message-list-inner">
                                <ul class="message-list custom-scroll">
                                    <li class="text-friends">
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                        <div class="message-time">10 minute ago</div>
                                    </li>
                                    <li class="text-author">
                                        <p>Many desktop publishing packages and web page editors</p>
                                        <div class="message-time">5 minute ago</div>
                                    </li>
                                    <li class="text-friends">
                                        <p>packages and web page editors </p>
                                        <div class="message-time">2 minute ago</div>
                                    </li>
                                    <li class="text-friends">
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                        <div class="message-time">10 minute ago</div>
                                    </li>
                                    <li class="text-author">
                                        <p>Many desktop publishing packages and web page editors</p>
                                        <div class="message-time">5 minute ago</div>
                                    </li>
                                    <li class="text-friends">
                                        <p>packages and web page editors </p>
                                        <div class="message-time">2 minute ago</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="chat-text-field mob-text-box">
                                <textarea class="live-chat-field custom-scroll" placeholder="Text Message"></textarea>
                                <button class="chat-message-send" type="submit" value="submit">
                                    <img src="user/images/icons/plane.png" alt="">
                                </button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button class="search-trigger">
                            <i class="search-icon flaticon-search"></i>
                            <i class="close-icon flaticon-cross-out"></i>
                        </button>
                        <div class="mob-search-box">
                            <form class="mob-search-inner">
                                <input type="text" placeholder="Search Here" class="mob-search-field">
                                <button class="mob-search-btn"><i class="flaticon-search"></i></button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mobile-header-profile">
                <!-- profile picture end -->
                <div class="profile-thumb profile-setting-box">
                    <a href="javascript:void(0)" class="profile-triger">
                        <figure class="profile-thumb-middle">
                            <img src="user/images/profile/profile-small-1.jpg" alt="profile picture">
                        </figure>
                    </a>
                    <div class="profile-dropdown text-left">
                        <div class="profile-head">
                            <h5 class="name"><a href="#">Madison Howard</a></h5>
                            <a class="mail" href="#">mailnam@mail.com</a>
                        </div>
                        <div class="profile-body">
                            <ul>
                                <li><a href="profile.html"><i class="flaticon-user"></i>Profile</a></li>
                                <li><a href="#"><i class="flaticon-message"></i>Inbox</a></li>
                                <li><a href="#"><i class="flaticon-document"></i>Activity</a></li>
                            </ul>
                            <ul>
                                <li><a href="#"><i class="flaticon-settings"></i>Setting</a></li>
                                <li><a href="signup.html"><i class="flaticon-unlock"></i>Sing out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- profile picture end -->
            </div>
        </div>
    </div>
</header>
<!-- header area end -->

<main>

    @yield('content')

</main>

<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="bi bi-finger-index"></i>
</div>
<!-- Scroll to Top End -->

<!-- footer area start -->
<footer class="d-none d-lg-block">
    <div class="footer-area reveal-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="footer-wrapper">
                        <div class="footer-card position-relative">
                            <div class="friends-search">
                                <form class="search-box">
                                    <input type="text" placeholder="Search Your Friends" class="search-field">
                                    <button class="search-btn"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                            <div class="friend-search-list">
                                <div class="frnd-search-title">
                                    <button class="frnd-search-icon"><i class="flaticon-settings"></i></button>
                                    <p>search friends</p>
                                    <button class="close-btn" data-close="friend-search-list"><i class="flaticon-cross-out"></i></button>
                                </div>
                                <div class="frnd-search-inner custom-scroll">
                                    <ul>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="user/images/profile/profile-small-1.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author">Jon Wilime</h6>
                                                <p>Many desktop publishing</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="user/images/profile/profile-small-2.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="user/images/profile/profile-small-3.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="user/images/profile/profile-small-4.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Jon Wilime</a></h6>
                                                <button class="add-frnd">10 mutual friends</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="user/images/profile/profile-small-5.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Robart faul</a></h6>
                                                <button class="add-frnd">12 mutual friends</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="user/images/profile/profile-small-3.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="user/images/profile/profile-small-4.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Jon Wilime</a></h6>
                                                <button class="add-frnd">10 mutual friends</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="user/images/profile/profile-small-5.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Robart faul</a></h6>
                                                <button class="add-frnd">12 mutual friends</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card card-small mb-0 active-profile-wrapper">
                            <div class="active-profiles-wrapper">
                                <div class="active-profile-carousel slick-row-20 slick-arrow-style">
                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="user/images/profile/profile-small-1.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="user/images/profile/profile-small-1.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="user/images/profile/profile-small-2.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="user/images/profile/profile-small-3.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="user/images/profile/profile-small-4.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="user/images/profile/profile-small-1.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="user/images/profile/profile-small-5.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="user/images/profile/profile-small-6.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="user/images/profile/profile-small-7.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="user/images/profile/profile-small-8.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="user/images/profile/profile-small-9.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="user/images/profile/profile-small-10.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="user/images/profile/profile-small-11.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->
                                </div>
                            </div>
                        </div>
                        <div class="footer-card position-relative">
                            <div class="live-chat-inner">
                                <div class="chat-text-field">
                                    <textarea class="live-chat-field custom-scroll" placeholder="Text Message"></textarea>
                                    <button class="chat-message-send" type="submit" value="submit">
                                        <img src="user/images/icons/plane.png" alt="">
                                    </button>
                                </div>
                                <div class="chat-output-box">
                                    <div class="live-chat-title">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb active">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="user/images/profile/profile-small-15.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->
                                        <div class="posted-author">
                                            <h6 class="author"><a href="profile.html">Robart Marloyan</a></h6>
                                            <span class="active-pro">active now</span>
                                        </div>
                                        <div class="live-chat-settings ml-auto">
                                            <button class="chat-settings"><i class="flaticon-settings"></i></button>
                                            <button class="close-btn" data-close="chat-output-box"><i class="flaticon-cross-out"></i></button>
                                        </div>
                                    </div>
                                    <div class="message-list-inner">
                                        <ul class="message-list custom-scroll">
                                            <li class="text-friends">
                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                                <div class="message-time">10 minute ago</div>
                                            </li>
                                            <li class="text-author">
                                                <p>Many desktop publishing packages and web page editors</p>
                                                <div class="message-time">5 minute ago</div>
                                            </li>
                                            <li class="text-friends">
                                                <p>packages and web page editors </p>
                                                <div class="message-time">2 minute ago</div>
                                            </li>
                                            <li class="text-friends">
                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                                <div class="message-time">10 minute ago</div>
                                            </li>
                                            <li class="text-author">
                                                <p>Many desktop publishing packages and web page editors</p>
                                                <div class="message-time">5 minute ago</div>
                                            </li>
                                            <li class="text-friends">
                                                <p>packages and web page editors </p>
                                                <div class="message-time">2 minute ago</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
<!-- footer area start -->
<footer class="d-block d-lg-none">
    <div class="footer-area reveal-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-footer-inner d-flex">
                        <div class="mobile-frnd-search">
                            <button class="search-toggle-btn"><i class="flaticon-search"></i></button>
                        </div>
                        <div class="mob-frnd-search-inner">
                            <form class="mob-frnd-search-box d-flex">
                                <input type="text" placeholder="Search Your Friends" class="mob-frnd-search-field">
                            </form>
                        </div>
                        <div class="card card-small mb-0 active-profile-mob-wrapper">
                            <div class="active-profiles-mob-wrapper slick-row-10">
                                <div class="active-profile-mobile">
                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="#">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="user/images/profile/profile-small-1.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="user/images/profile/profile-small-8.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="user/images/profile/profile-small-2.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="user/images/profile/profile-small-3.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="user/images/profile/profile-small-4.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="user/images/profile/profile-small-5.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="user/images/profile/profile-small-9.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- JS
============================================ -->


<!-- jQuery JS -->
<script src="{{asset('user/js/vendor/jquery-3.3.1.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('user/js/vendor/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('user/js/vendor/bootstrap.min.js')}}"></script>
<!-- Slick Slider JS -->
<script src="{{asset('user/js/plugins/slick.min.js')}}"></script>
<!-- nice select JS -->
<script src="{{asset('user/js/plugins/nice-select.min.js')}}"></script>
<!-- audio video player JS -->
<script src="{{asset('user/js/plugins/plyr.min.js')}}"></script>
<!-- perfect scrollbar js -->
<script src="{{asset('user/js/plugins/perfect-scrollbar.min.js')}}"></script>
<!-- light gallery js -->
<script src="{{asset('user/js/plugins/lightgallery-all.min.js')}}"></script>
<!-- image loaded js -->
<script src="{{asset('user/js/plugins/imagesloaded.pkgd.min.js')}}"></script>
<!-- isotope filter js -->
<script src="{{asset('user/js/plugins/isotope.pkgd.min.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('user/js/main.js')}}"></script>

</body>

</html>
