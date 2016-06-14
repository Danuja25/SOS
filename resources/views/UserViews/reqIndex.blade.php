
<!DOCTYPE HTML>
<html>
<head>
    <title>S.O.S :: Home</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"  />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easydropdown.js"></script>
    <!-- Mega Menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
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
            <li a="" href="#"><div class="drop-down">
                    <select class="d-arrow">
                        <option value="Eng">Our Network</option>
                        <option value="Fren">versions</option>
                        <option value="Russ">variations</option>
                        <option value="Chin">Internet</option>
                    </select>
                </div></li>
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
                                <li><a href="location.html">Current Issues </a></li> |
                                <li><a href="addlocation.html">Solved Issues </a></li> |
                                <li><a href="location.html"> Review a location  </a></li> |
                                <li><a href="location.html">Review a location</a></li>
                                <div class="clearfix"> </div>
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
                                <div class="clearfix"> </div>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </li>
                <li><a href="404.html" class="scroll"> <span class="service"> </span>Philanthropists</a></li>
                <li><a href="shop.html" class="scroll"><span class="mail"> </span> Leader board </a></li>
                <div class="clearfix"></div>
            </ul>
            <script>
                $("span.menu").click(function(){
                    $(".top-nav ul").slideToggle(300, function(){
                    });
                });
            </script>
        </div>
        <div class="head-right">
            <ul class="number">
                <li><a href="login.html"><i class="roc"> </i>Log in</a></li>
                <li><a href="register.html"><i class="phone"> </i>Sign Up</a></li>
                <li><a href="contact.html"><i class="mail"> </i>Contact</a></li>
                <div class="clearfix"> </div>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="banner">
    <iframe
            width="1500"
            height="450"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAP4OEm9PpWU_wsK8_8ust-5EyRUyOkY80
    &q=University of Moratuwa,Sri Lanka" allowfullscreen>
    </iframe>
</div>
<div class="banner-info">
    <div class="container">
        <div class="reservation">
            <ul>
                <li class="boo">
                    <span>1</span><h4>Drop pin onto the location on map</h4>
                    <div class="clearfix"></div>
                </li>
                <li class="boo">
                    <span>2</span><h4>Add an issue found at location</h4>
                    <div class="clearfix"></div>
                </li>

                <li class="span1_of_3">
                    <div class="date_btn">
                        <form action="addlocation.html">
                            <input type="submit" value="Add Issue">
                        </form>
                    </div>
                </li>
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>
</div>
<div class="loc-lov">
    <div class="container">
        <div class="loc-left">
            <ul>
                <li><a href="#"><i class="adm"></i></a></li>
                <li><a href="#"><i class="set"></i></a></li>
                <li><a href="#"><i class="str"></i></a></li>
                <li><a href="#"><i class="plc"></i></a></li>
                <li><a href="#"><i class="plus"></i></a></li>
                <div class="clearfix"> </div>
            </ul>
        </div>
        <div class="loc-right">
            <div class="loc-top">
                <h3>Issues you’ve Add</h3>
                @foreach($addedIssues as $issue)
                    <div class="blas">
                        <li class="wicked">{{$issue->Title}} </li>
                        <li class="mullet">{{$issue->Location}}</li>
                        <li class="see"><a href="#">Check issue</a></li>
                        <li class="com"><a >{{$issue->No_of_votes}}</a></li>
                    </div>
                @endforeach
                {{--<div class="blas">
                    <li class="wicked">Broken bridge </li>
                    <li class="mullet">Senanayaka road, Thudawa</li>
                    <li class="see"><a href="#">See Location</a></li>
                    <li class="com"><a href="#">241</a></li>
                </div>
                <div class="ball">
                    <li class="wicked">Overlowing drains during heavy rains</li>
                    <li class="mullet">Sinha patumaga, Thudawa</li>
                    <li class="see"><a href="#">See Location</a></li>
                    <li class="loc"><a href="#">13</a></li>
                </div>
               --}}
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="col-md-2 abo-foo1">
            <h5>About Us</h5>
            <ul>
                <li><a href="about.html">About us</a></li>
                <li><a href="#">Our mission</a></li>
                <li><a href="#">Get help</a></li>
            </ul>
        </div>
        <div class="col-md-3 abo-foo">
            <h5>Account Information</h5>
            <ul>
                <li><a href="login.html">How to login</a></li>
                <li><a href="register.html">Create an account</a></li>
                <li><a href="register.html">Join us</a></li>
            </ul>
        </div>
        <div class="col-md-2 abo-foo1">
            <h5>ReadyAim Solutions</h5>
            <p>www.readyaim.net</p>
            <div class="clearfix"></div>
            <div class="footer-bottom">

            </div>
        </div>
    </div>
    </div>
</body>
</html>