<!DOCTYPE HTML>
<html>
<head>
    <title>S.O.S :: Login</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Location Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easydropdown.js"></script>
    <!-- Mega Menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function () {
            $(".megamenu").megamenu();
        });</script>
    <!-- Mega Menu -->
</head>
<body>
<!-- banner -->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""></a>
        </div>
        <div class="header-left">
            <li a="" href="#">
                <div class="drop-down">
                    <select class="d-arrow">
                        <option value="Eng">Our Network</option>
                        <option value="Fren">versions</option>
                        <option value="Russ">variations</option>
                        <option value="Chin">Internet</option>
                    </select>
                </div>
            </li>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="header-bottom">
    <div class="container">
        <div class="top-nav">
            <span class="menu"> </span>
            <ul class="navig megamenu skyblue">
                <li><a href="location.html" class="scroll"><span> </span> Issues</a>

                    <div class="megapanel">
                        <div class="na-left">
                            <ul class="grid-img-list">
                                <li><a href="location.html">Current Issues </a></li>
                                |
                                <li><a href="addlocation.html">Solved Issues </a></li>
                                |
                                <li><a href="location.html"> Review a location </a></li>
                                |
                                <li><a href="location.html">Review a location</a></li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div class="na-right">
                            <ul class="grid-img-list">
                                <li><a href="login.html">Login Here or</a></li>
                                <li class="reg">
                                    <form action="register.html">
                                        <input type="submit" value="Register">
                                    </form>
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li><a href="404.html" class="scroll"> <span class="service"> </span>Philanthropists</a></li>
                <li><a href="shop.html" class="scroll"><span class="mail"> </span> Leader board </a></li>
                <div class="clearfix"></div>
            </ul>
            <script>
                $("span.menu").click(function () {
                    $(".top-nav ul").slideToggle(300, function () {
                    });
                });
            </script>
        </div>
        <div class="head-right">
            <ul class="number">
                <li><a href="login.html"><i class="roc"> </i>Log in</a></li>
                <li><a href="register.html"><i class="phone"> </i>Sign Up</a></li>
                <li><a href="contact.html"><i class="mail"> </i>Contact</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- login -->
<div class="login-page">
    <div class="container">
        <div class="account_grid">
            <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
                <h3>NEW USERS</h3>

                <p>Register in the system using your National ID and start raising your issues.</p>
                <a class="acount-btn" href="register.html">Create an Account</a>
            </div>
            <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                <h3>REGISTERED USERS</h3>

                <p>If you have an account with us, please log in.</p>

                <form action="{{route('login')}}" method="POST">

                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                {{$error}}
                            @endforeach
                        </div>
                    @endif


                    <input hidden name="_token" value="{{csrf_token()}}">

                    <div>
                        <span>User name<label>*</label></span>
                        <input type="text" name="Username">
                    </div>
                    <div>
                        <span>Password<label>*</label></span>
                        <input type="password" name="Password">
                    </div>
                    <a class="forgot" href="#">Forgot Your Password?</a>
                    <input type="submit" value="Login">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- login -->
<div class="footer">
    <div class="container">
        <div class="col-md-2 abo-foo1">
            <h5>About Us</h5>
            <ul>
                <li><a href="about.html">About us</a></li>
                <li><a href="#">Who started it</a></li>
                <li><a href="#">how to help</a></li>
            </ul>
        </div>
        <div class="col-md-3 abo-foo">
            <h5>Account Information</h5>
            <ul>
                <li><a href="login.html">How to login</a></li>
                <li><a href="register.html">Create an account</a></li>
                <li><a href="login.html">Logout</a></li>
                <li><a href="register.html">Join us</a></li>
            </ul>
        </div>
        <div class="col-md-2 abo-foo1">
            <h5>Location</h5>

            <p>123, street name</p>

            <p> landmark,</p>

            <p> California 123</p>

            <p> Tel: 123-456-7890</p>

            <p> Fax. +123-456-7890</p>
        </div>
        <div class="col-md-2 abo-foo1">
            <h5>Agreements</h5>
            <ul>
                <li><a href="#">Legal agreement</a></li>
                <li><a href="#">Model release (adult)</a></li>
                <li><a href="#">Model release (Minor)</a></li>
                <li><a href="#">Property Release</a></li>
            </ul>
        </div>
        <div class="col-md-3 abo-foo">
            <li a="" href="#">
                <div class="drop-down1">
                    <select class="d-arrow">
                        <option value="Eng">Our Network</option>
                        <option value="Fren">versions</option>
                        <option value="Russ">variations</option>
                        <option value="Chin">Internet</option>
                    </select>
                </div>
            </li>
        </div>
        <div class="clearfix"></div>
        <div class="footer-bottom">
            <p>Copyrights © 2015 Location All rights reserved | Template by <a href="http://w3layouts.com/">&nbsp;
                    W3layouts</a></p>
        </div>
    </div>
</div>
</body>
</html>