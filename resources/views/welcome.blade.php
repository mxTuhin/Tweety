@extends('layouts.loginLayout')
@section('title', "Login")
@section('content')
    <div class="col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-center">
        <div class="signup-form-wrapper">
            <h1 class="create-acc text-center">Create An Account</h1>
            <div class="signup-inner text-center">
                <h3 class="title">Welcome to Tweety</h3>
                <form class="signup-inner--form" action="{{route('store_user')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <input type="email" name="email" class="single-field" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" name="password" class="single-field" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="name" class="single-field" placeholder=" Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="username" class="single-field" placeholder=" Username">
                        </div>


                        <div class="col-md-6">
                            <select class="nice-select" name="gender">
                                <option value="NotSelected" disabled selected>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="nice-select" name="country">
                                <option value="NotSelected" disabled selected>Select Your Country</option>
                                <option value="Bangladesh">Bangladesh</option>
                            </select>
                        </div>
                        <div  class="col-12 col-sm-12">
                            <input type="file" class="single-field" name="image">
                        </div>

                        <div  class="col-12 col-sm-12">
                            <input type="submit" class="submit-btn" value="Create Account">
                        </div>
                    </div>
                    <h6 class="terms-condition">I have read & accepted the <a href="#">terms of use</a></h6>
                </form>
            </div>
        </div>
    </div>
@endsection
