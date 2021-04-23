@extends('profiles.layout')
@section('title', 'About')
@section('about_prof_link', 'active')

@section('profile_content')
    <!-- sendary menu start -->
    <div class="menu-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="secondary-menu-wrapper bg-white">
                        <div class="page-title-inner">
                            <h4 class="page-title">about</h4>
                        </div>
                        <div class="main-menu-inner header-top-navigation">
                            <nav>
                                <ul class="main-menu">
                                    <li><a href="{{$user->facebook}}"><span>facebook</span> <i style="color: black" class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{$user->twitter}}"><span>twitter</span> <i class="flaticon-twitter-logo-silhouette"></i></a></li>
                                    <li><a href="{{$user->flickr}}"><span>Flickr</span> <i class="flaticon-google-plus"></i></a></li>
                                    <li><a href="{{$user->github}}"><span>Github</span> <i class="flaticon-pinterest"></i></a></li>
                                    <!-- <li class="d-inline-block d-md-none"><a href="profile.html">edit profile</a></li> -->
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sendary menu end -->

    <!-- about author details start -->
    <div class="about-author-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card widget-item">
                        <div class="about-me">
                            <ul class="nav flex-column about-author-menu">
                                <li><a href="#one" data-toggle="tab" class="active">Something About Me</a></li>
                                <li><a href="#two" data-toggle="tab">Working Zone</a></li>
                                <li><a href="#three" data-toggle="tab">Educational Qualification</a></li>

                                <li><a href="#six" data-toggle="tab">Contact Details</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="about-description">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="one">
                                <div class="work-zone">
                                    <div class="author-desc-title d-flex">
                                        <h6 class="author"><a href="profile.html">{{$user->name}}</a></h6>

                                    </div>
                                    <p>{{$user->about}}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="two">
                                <div class="work-zone">
                                    <div class="author-desc-title d-flex">
                                        <h6 class="author"><a href="profile.html">{{$user->name}}</a></h6>

                                    </div>
                                    <h1><i class="bi bi-office-bag"></i> {{$user->workplace}}</h1>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="three">
                                <div class="work-zone">
                                    <div class="author-desc-title d-flex">
                                        <h6 class="author"><a href="profile.html">{{$user->name}}</a></h6>


                                    </div>
                                    <h1><i class="fa fa-university"></i> {{$user->institution}}</h1>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="four">
                                <div class="work-zone">
                                    <div class="author-desc-title d-flex">
                                        <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                        <div class="post-settings-bar">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <div class="post-settings arrow-shape">
                                                <ul>
                                                    <li><button>copy link to adda</button></li>
                                                    <li><button>edit post</button></li>
                                                    <li><button>embed adda</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="five">
                                <div class="work-zone">
                                    <div class="author-desc-title d-flex">
                                        <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                        <div class="post-settings-bar">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <div class="post-settings arrow-shape">
                                                <ul>
                                                    <li><button>copy link to adda</button></li>
                                                    <li><button>edit post</button></li>
                                                    <li><button>embed adda</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="six">
                                <div class="work-zone">
                                    <div class="author-desc-title d-flex">
                                        <h6 class="author"><a href="profile.html">{{$user->name}}</a></h6>

                                    </div>
                                    <div class="about-author">
                                        <h6>
                                            <ul class="author-into-list">
                                                <li><i class="fas fa-briefcase"></i> {{$user->workplace}}</li>
                                                <li><i class="fas fa-home"></i> {{$user->home}}</li>
                                                <li><i class="fa fa-university"></i> {{$user->institution}}</li>

                                                <li><i class="fas fa-heartbeat"></i> {{$user->hobby}}</li>
                                                <li><i class="fa fa-mobile"></i> {{$user->cellnum}}</li>
                                                <li><i class="fas fa-address-book"></i> {{$user->address}}</li>

                                            </ul>
                                        </h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about author details start -->
@endsection
