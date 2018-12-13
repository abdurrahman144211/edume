@extends('layouts.app')

@section('content')
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>login</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Login start -->
    <div class="login-area pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="login">
                        <div class="login-form-container">
                            <div class="login-text">
                                <h2>login</h2>
                                <span>Please login using account detail bellow.</span>
                            </div>
                            <div class="login-form">
                                <form action="#" method="post">
                                    <input type="text" name="user-name" placeholder="Username">
                                    <input type="password" name="user-password" placeholder="Password">
                                    <div class="button-box">
                                        <div class="login-toggle-btn">
                                            <input type="checkbox" id="remember">
                                            <label for="remember">Remember me</label>
                                            <a href="#">Forgot Password?</a>
                                        </div>
                                        <button type="submit" class="default-btn">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login end -->
@endsection
