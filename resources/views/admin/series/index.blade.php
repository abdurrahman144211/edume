@extends('layouts.admin')
@section('content')
    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>Add New Series</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Start -->
    <div class="course-area pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    @foreach($series as $item)
                        <div class="single-event mb-35">
                            <div class="event-date">
                                <h3>
                                    <a href="event-details.html">20
                                        <span>June</span>
                                    </a>
                                </h3>
                            </div>
                            <div class="event-content text-left">
                                <div class="event-content-left">
                                    <h4>
                                        <a href="event-details.html">MICRO BIOLOGICAL WORKSHOP</a>
                                    </h4>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i>9.00 AM - 4.45 PM</li>
                                        <li><i class="fa fa-map-marker"></i>New Yourk City</li>
                                    </ul>
                                </div>
                                <div class="event-content-right">
                                    <a href="event-details.html" class="default-btn">join now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="login">
                        <div class="login-form-container">
                            <div class="login-text">
                                <h2>Add new series</h2>
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
    <!-- Course End -->
@endsection