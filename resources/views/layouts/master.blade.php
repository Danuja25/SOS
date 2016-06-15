<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title',"S.O.S")</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('css/bootstrap1.css')}}" rel="stylesheet" type="text/css" media="all">

    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/style1.css')}}" rel="stylesheet" type="text/css" media="all"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>


    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>


    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.easydropdown.js')}}"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <!-- Mega Menu -->
    <link href="{{asset('css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="{{asset('js/megamenu.js')}}"></script>
    <script>$(document).ready(function () {
            $(".megamenu").megamenu();
        });
    </script>
</head>
<body>
<!-- banner -->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="{{url('/home')}}"><img src="{{asset('images/logo.png')}}" class="img-responsive" alt=""></a>
        </div>
        <div class="header-left">
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="header-bottom">
    <div class="container">
        <div class="top-nav">
            <span class="menu"> </span>
            <ul class="navig megamenu skyblue">
                <li><a href="{{url('/home')}}" class="scroll"><span class="service"> </span> Home </a></li>
                <li><a href="{{url('issues')}}" class="scroll"><span> </span> Issues</a>

                    <div class="megapanel">
                        <div class="na-left">
                            <ul class="grid-img-list">
                                <li><a href="{{url('issues')}}">Current Issues </a></li>
                                |
                                <li><a href="{{url('addIssue')}}">Add Issue </a></li>

                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div class="na-right">
                            <ul class="grid-img-list">

                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li><a href="{{url('leaderboard')}}" class="scroll"><span class="mail"> </span> Leader board </a></li>
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
                <li><a href="logout"><i class="roc"> </i>Log Out</a></li>
                <li><a href="contact"><i class="mail"> </i>Contact</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

@yield('content')

        <!-- 404 -->
<div class="footer">
    <div class="container">
        <div class="col-md-2 abo-foo1">
            <h5>About Us</h5>
            <ul>
                <li><a >About us</a></li>
                <li><a >ReadyAim Solutions</a></li>
                <li><a >Colombo</a></li>
                <li><a >Sri Lanka</a></li>
            </ul>
        </div>

        <div class="footer-bottom">
            <p>Copyrights © 2016 ReadyAim Solutions All rights reserved.</p>
        </div>
    </div>
</div>

</body>
</html>