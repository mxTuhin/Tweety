@extends('profiles.layout')
@section('title', 'Photos')
@section('photos_prof_link', 'active')

@section('profile_content')
    <!-- sendary menu start -->
    <div class="menu-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="secondary-menu-wrapper secondary-menu-2 bg-white">
                        <div class="page-title-inner">
                            <h4 class="page-title">photos ({{$user->gallery->count()}})</h4>
                        </div>
                        <div class="filter-menu">
                            <button class="active" data-filter="*">all</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sendary menu end -->

    <!-- photo section start -->
    <div class="photo-section mt-20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-box">
                        <div class="content-body">
                            <div class="row mt--30 photo-filter">

                                <div class="col-sm-6 col-md-4 folder">
                                    <div class="photo-group">
                                        <div class="gallery-toggle">
                                            <div class="d-none product-thumb-large-view">
                                                @foreach($user->gallery as $img)
                                                    <img src="{{asset('user/images/uploads')}}/{{$img->img}}" alt="Photo Gallery">
                                                @endforeach
                                            </div>
                                            <div class="gallery-overlay">
                                                <img  src="{{asset('user/images/uploads')}}/{{$user->gallery[0]->img}}" alt="Photo Gallery">
                                                <div class="view-icon"></div>
                                            </div>
                                            <div class="photo-gallery-caption">
                                                <h3 class="photos-caption">User Uploads ({{$user->gallery->count()}})</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 folder">
                                    <div class="photo-group">
                                        <div class="gallery-toggle">
                                            <div class="d-none product-thumb-large-view">
                                                @foreach($user->sweet_memories as $img)
                                                    <img src="{{asset('user/images/uploads')}}/{{$img->img}}" alt="Photo Gallery">
                                                @endforeach
                                            </div>
                                            <div class="gallery-overlay">
                                                <img style="width: @parent !important;" src="{{asset('user/images/uploads')}}/{{$user->sweet_memories[0]->img}}" alt="Photo Gallery">
                                                <div class="view-icon"></div>
                                            </div>
                                            <div class="photo-gallery-caption">
                                                <h3 class="photos-caption">Sweet Memoties ({{$user->sweet_memories->count()}})</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- photo section end -->


@endsection

@section('dashboardJS')

@endsection
