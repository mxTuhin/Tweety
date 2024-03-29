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
    <title>{{config("app.name")}} | @yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/images/favicon.ico')}}">

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
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.0/css/lightgallery.min.css">

    <style>
        .send_love_button:hover {
            color: red;

        }
        @media only screen and (min-width: 1600px) {
            #large_profile_img_custom{
                height:260px;
            }
            #profile_banner_custom{
                height: 500px
            }
        }
        .comment_section{
            display: none;
        }
    </style>

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
                                <li class="active"><a href="{{route('timeline_user')}}">home</a></li>

                                <li class="notification-trigger"><a class="msg-trigger-btn" href="#b">notification</a>
                                    <div class="message-dropdown" id="b">
                                        <div class="dropdown-title">
                                            <p class="recent-msg">Notification</p>
                                            <button>
                                                <i class="flaticon-settings"></i>
                                            </button>
                                        </div>
                                        <ul class="dropdown-msg-list">
                                            @foreach(current_user()->notifications as $notify)
                                                @include('notifications')
                                            @endforeach

                                        </ul>
                                        <div class="msg-dropdown-footer">

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
                        <a href="{{route('timeline_user')}}">
                            <img src="{{asset('user/images/logo/logo.png')}}" alt="brand logo">
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
                                            <li><a href="{{route('profile',current_user())}}"><i class="fas fa-user"></i>Profile</a></li>

                                        </ul>
                                        <ul>
                                            <li><a href="#"><i class="fas fa-user-cog"></i>Setting</a></li>
                                            <li>
                                                <a
                                                    ref="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                >
                                                    <i class="fas fa-unlock-alt"></i>Sign Out
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
                <a href="{{route('timeline_user')}}">
                    <img src="{{asset('user/images/logo/logo-white.png')}}" alt="logo">
                </a>
            </div>
            <div class="mobile-menu w-100">
                <ul>
                    <li>
                        <button class="notification request-trigger"><i class="flaticon-notification"></i>
                            <span>03</span>
                        </button>
                        <ul class="frnd-request-list">
                            @foreach(current_user()->notifications as $notify)
                                @include('notifications')
                            @endforeach
                        </ul>
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
                            <img src="{{asset("user/images/profile")}}/{{auth()->user()->profile_img}}" alt="profile picture">
                        </figure>
                    </a>
                    <div class="profile-dropdown text-left">
                        <div class="profile-head">
                            <h5 class="name"><a href="#">{{current_user()->name}}</a></h5>
                            <a class="mail" href="#">{{current_user()->email}}</a>
                        </div>
                        <div class="profile-body">
                            <ul>
                                <li><a href="{{route('profile',current_user())}}"><i class="fas fa-user"></i>Profile</a></li>

                            </ul>
                            <ul>
                                <li><a href="#"><i class="fas fa-user-cog"></i>Setting</a></li>
                                <li>
                                    <a
                                        ref="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    >
                                        <i class="fas fa-unlock-alt"></i>Sign Out
                                    </a>
                                </li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
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
<?php
if(current_user()->conversations->count()<=0){
    $con=current_user()->revConversations;
    $bool=false;
}
else{
    $con=current_user()->conversations;
    $bool=true;
}
?>


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
                                        <?php
                                        foreach($con as $conversation){
                                        if($bool==true){
                                            $convo=$conversation->friend;
                                        }
                                        else{
                                            $convo=$conversation->user;
                                        }
                                        ?>
                                            <li onclick="messageDock('{{$convo->profile_img}}', '{{$convo->name}}', '{{$conversation->id}}', '{{$convo->id}}')" class="d-flex align-items-center profile-active">
                                                <!-- profile picture end -->
                                                <div class="profile-thumb active">
                                                    <a href="#">
                                                        <figure class="profile-thumb-small">
                                                            <img src="{{asset('user/images/profile/')}}/{{$convo->profile_img}}" alt="profile picture">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <!-- profile picture end -->

                                                <div class="posted-author">
                                                    <h6 class="author">{{$convo->name}}</h6>
                                                    <p>{{$convo->bio}}</p>
                                                </div>
                                            </li>
                                            <?php
                                            }
                                            ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
{{--                        Profile Dock--}}

                            <div class="card card-small mb-0 active-profile-wrapper">

                                <div class="active-profiles-wrapper">
                                    <div class="active-profile-carousel slick-row-20 slick-arrow-style">


                                            <?php
                                            foreach($con as $conversation){
                                            if($bool==true){
                                                $convo=$conversation->friend;
                                            }
                                            else{
                                                $convo=$conversation->user;
                                            }
                                            ?>
                                                <!-- profile picture end -->
                                                <div class="single-slide">
                                                    <div class="profile-thumb active profile-active">
                                                        <a onclick="messageDock('{{$convo->profile_img}}', '{{$convo->name}}', '{{$conversation->id}}', '{{$convo->id}}')" href="#">
                                                            <figure class="profile-thumb-small">
                                                                <img src="{{asset("user/images/profile")}}/{{$convo->profile_img}}" alt="profile picture">
                                                            </figure>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- profile picture end -->
                                            <?php
                                            }
                                            ?>


                                    </div>
                                </div>

                            </div>

                        <div class="footer-card position-relative">
                            <div class="live-chat-inner">
                                <div class="chat-text-field">
                                    <textarea onkeydown="send_message_reply('input')" id="message_area_box" class="live-chat-field custom-scroll" placeholder="Text Message"></textarea>
                                    <button onclick="send_message_reply('button')" type="button">
                                        <img src="{{asset('user/images/icons/plane.png')}}" alt="">
                                    </button>
                                </div>
                                <div class="chat-output-box">
                                    <div class="live-chat-title">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb active">
                                            <a>
                                                <figure class="profile-thumb-small">
                                                    <img id="chatbox_img" src="" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->
                                        <div class="posted-author">
                                            <h6 style="color: white" id="chatbox_name" class="author"><a>Default name</a></h6>
                                            <span class="active-pro">Online</span>
                                        </div>
                                        <div class="live-chat-settings ml-auto">
                                            <button class="chat-settings"><i class="flaticon-settings"></i></button>
                                            <button class="close-btn" data-close="chat-output-box"><i class="flaticon-cross-out"></i></button>
                                        </div>
                                    </div>
                                    <div class="message-list-inner">
                                        <ul id="chatbox_replies" class="message-list custom-scroll">

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
                                <?php
                                foreach($con as $conversation){
                                if($bool==true){
                                    $convo=$conversation->friend;
                                }
                                else{
                                    $convo=$conversation->user;
                                }
                                ?>
                                <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a onclick="messageDock('{{$convo->profile_img}}', '{{$convo->name}}', '{{$conversation->id}}', '{{$convo->id}}')" href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{asset("user/images/profile")}}/{{$convo->profile_img}}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->
                                    <?php
                                    }
                                    ?>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


<script>
    var global_message_user;
    var global_chat_user_id;
    function add_like(_id){
        document.getElementById("add_like_button_ch"+_id).style.display="none";
        document.getElementById("remove_like_button_ch"+_id).style.display="block";
        var like=document.getElementById('add_like_count'+_id).innerText;
        var like_counter=parseInt(like);

        $.ajax({
            type : 'post',
            url : '{{URL::to(route('add_like'))}}',
            data:{
                id: _id,
            },
            success:function(data){
                console.log(data)
                document.getElementById('remove_like_count'+_id).innerText = like_counter+1;
            }
        });

    }

    function remove_like(_id){
        document.getElementById("remove_like_button_ch"+_id).style.display="none";
        document.getElementById("add_like_button_ch"+_id).style.display="block";
        var like=document.getElementById('remove_like_count'+_id).innerText;
        var like_counter=parseInt(like);

        $.ajax({
            type : 'post',
            url : '{{URL::to(route('remove_like'))}}',
            data:{
                id: _id,
            },
            success:function(data){
                console.log(data)
                document.getElementById('add_like_count'+_id).innerText = like_counter-1;
            }
        });

    }
</script>


<script>
    function follow_user(user_id){
        try{
            var follow_icon = document.getElementById('follow_user_icon_'+user_id);
            follow_icon.classList.remove('fa-user-plus');
            follow_icon.classList.add('fa-user-check');
        }
        catch (err){
            console.log('...');
        }
        try{
            if(document.getElementById('follow_button').innerText=="Follow"){
                document.getElementById('follow_button').innerText="Unfollow";
            }
            else{
                document.getElementById('follow_button').innerText="Follow";
            }
        }catch (err){
            console.log("...")
        }


        $.ajax({
            type : 'post',
            url : '{{URL::to(route('follow_user'))}}',
            data:{
                id: user_id
            },
            success:function(data){
                console.log(data)
            }
        });

    }
</script>
<script>
    window.setInterval(function() {
        $.ajax({
            type : 'post',
            url : '{{URL::to(route('fetch_msg'))}}',
            data:{
                id: global_message_user
            },
            success:function(data){

                document.getElementById('chatbox_replies').innerHTML=data;
                if(data!=""){
                    var elem = document.getElementById('chatbox_replies');
                    elem.scrollTop = elem.scrollHeight;
                }


            }
        });
    }, 1000);
</script>

<script>

    function messageDock(prof_img, name, id, chat_user_id){
        global_message_user=id;
        global_chat_user_id=chat_user_id;
        console.log(global_message_user);
        console.log(global_chat_user_id);
        document.getElementById('chatbox_name').innerText=name;
        document.getElementById('chatbox_img').src='{{asset('user/images/profile/')}}'+'/'+prof_img;

        $.ajax({
            type : 'post',
            url : '{{URL::to(route('fetch_msg'))}}',
            data:{
                id: id
            },
            success:function(data){
                console.log(data)
                document.getElementById('chatbox_replies').innerHTML=data;
                var elem = document.getElementById('chatbox_replies');
                elem.scrollTop = elem.scrollHeight;

            }
        });



        // for(var i=0; i<5; ++i){
        //     html+='<li class="text-friends"><p>Friend Msg</p> <div class="message-time">Created At</div> </li>';
        //     html+='<li class="text-author"><p>Self Message</p> <div class="message-time">Created</div> </li>';
        // }




    }
</script>

<script>
    function send_message_reply(identifier){
        if(identifier=='button'){
            box_module();
        }


        if(event.key === 'Enter' && event.shiftKey) {

        }else if(event.key==='Enter'){
            box_module();
        }

        var elem = document.getElementById('chatbox_replies');
        elem.scrollTop = elem.scrollHeight;


    }

    function box_module(){
        event.preventDefault();
        var msg=document.getElementById("message_area_box").value;
        var html = '<li class="text-author"><p>'+msg+'</p> <div class="message-time">Just Now</div> </li>';
        document.getElementById('chatbox_replies').innerHTML+=html;
        document.getElementById("message_area_box").value="";
        $.ajax({
            type : 'post',
            url : '{{URL::to(route('store_msg'))}}',
            data:{
                id: global_message_user,
                msg:msg,
                chat_user_id:global_chat_user_id,


            },
            success:function(data){
                console.log(data)

            }
        });


    }
</script>

<script>
    function send_anger(id, name){
        $.ajax({
            type : 'post',
            url : '{{URL::to(route('send_anger'))}}',
            data:{
                id: id
            },
            success:function(data){
                console.log(data)
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: name+' Has been notified with Angry Vibe',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        });

    }
</script>

<script>
    var display=false;
    function show_comment(id){
        if(display==false){
            document.getElementById("comment_section_"+id).style.display="block";
            display=true;
        }
        else{
            document.getElementById("comment_section_"+id).style.display="none";
            display=false;
        }

    }
</script>

<script>
    function add_opinion(id, opinion){


        if(event.key === 'Enter') {
            event.preventDefault();
            $.ajax({
                type : 'post',
                url : '{{URL::to(route('add_opinion'))}}',
                data:{
                    id: id,
                    opinion:opinion.value
                },
                success:function(data){
                    document.getElementById("comment_box_"+id).innerHTML += data;
                    console.log(opinion.value);
                    document.getElementById("opinion_input_"+id).value="";
                    var opinion_count=document.getElementById("tweet_opinion_count_"+id).innerText;
                    document.getElementById("tweet_opinion_count_"+id).innerText = parseInt(opinion_count)+1;
                }
            });

        }
    }
</script>

<script>
    function add_opinion_like(id){
        document.getElementById("add_opinion_like"+id).style.display="none";
        document.getElementById("remove_opinion_like"+id).style.display="block";

        var like_counter = document.getElementById("opinion_like_count_"+id).innerText;
        document.getElementById("opinion_like_count_"+id).innerText = parseInt(like_counter)+1;
        $.ajax({
            type : 'post',
            url : '{{URL::to(route('opinion_like'))}}',
            data:{
                id: id
            },
            success:function(data){
                console.log(data)

            }
        });
    }

    function remove_opinion_like(id){
        document.getElementById("add_opinion_like"+id).style.display="block";
        document.getElementById("remove_opinion_like"+id).style.display="none";
        var like_counter = document.getElementById("opinion_like_count_"+id).innerText;
        document.getElementById("opinion_like_count_"+id).innerText = parseInt(like_counter)-1;
        $.ajax({
            type : 'post',
            url : '{{URL::to(route('remove_opinion_like'))}}',
            data:{
                id: id
            },
            success:function(data){
                console.log(data)

            }
        });
    }
</script>

<script>
    function close_todo(id){
        $("#ToDoList"+id).remove();
        $.ajax({
            type : 'post',
            url : '{{URL::to(route('close_todo_list'))}}',
            data:{
                id: id
            },
            success:function(data){
                console.log(data)

            }
        });
    }
</script>

<script>
    function delete_tweet(id){
        $("#Tweet"+id).remove();
        $.ajax({
            type : 'post',
            url : '{{URL::to(route('delete_tweet'))}}',
            data:{
                id: id
            },
            success:function(data){
                console.log(data)

            }
        });
    }
</script>

<script>
    function edit_tweet(id){
        $("#TweetBody"+id).hide();
        $("#TweetEditorDiv"+id).show();

    }
</script>

<script>
    function update_tweet(id){
        var body=$("#TweetBody"+id);
        body.show();

        $("#TweetEditorDiv"+id).hide();
        var Txt=document.getElementById("TweetEditor"+id).value;
        document.getElementById("TweetBody"+id).innerText=Txt;
        $.ajax({
            type : 'post',
            url : '{{URL::to(route('edit_tweet'))}}',
            data:{
                id: id,
                txt: Txt
            },
            success:function(data){
                console.log(data)

            }
        });
    }
</script>

<script>
    function update_profile(){
        var Name= document.getElementById("name").value;
        var Gender= document.getElementById("gender").value;
        var Country = document.getElementById("country").value;
        var Cellnum= document.getElementById("cellnum").value;
        var Workplace = document.getElementById("workplace").value;
        var Home = document.getElementById("home").value;
        var Institution = document.getElementById("institution").value;
        var Hobby = document.getElementById("hobby").value;
        var About = document.getElementById("about").value;
        var Bio = document.getElementById("bio").value;
        var Facebook = document.getElementById("facebook").value;
        var Twitter = document.getElementById("twitter").value;
        var Flickr = document.getElementById("flickr").value;
        var Github = document.getElementById("github").value;
        var Address = document.getElementById("address").value;

        $.ajax({
            type : 'post',
            url : '{{URL::to(route('update_profile'))}}',
            data:{
                name: Name,
                gender: Gender,
                country: Country,
                cellnum: Cellnum,
                workplace: Workplace,
                home: Home,
                institution: Institution,
                hobby: Hobby,
                about: About,
                bio: Bio,
                facebook: Facebook,
                twitter: Twitter,
                flickr: Flickr,
                github: Github,
                address: Address
            },
            success:function(data){
                console.log(data)
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Profile Updated Successfully..',
                    showConfirmButton: false,
                    timer: 1500
                })
                setTimeout(function(){
                    window.location.href = '{{route('profile', $user->username)}}';
                }, 2000);

            }
        });
    }
</script>


@yield('dashboardJS')

</body>

</html>
