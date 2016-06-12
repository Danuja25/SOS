
<!DOCTYPE HTML>
<html>
<head>
    <title>S.O.S :: Add Solution</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Location Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easydropdown.js"></script>
    <!-- Mega Menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <script
            src="http://maps.googleapis.com/maps/api/js">
    </script>
    <script>
        var map;
        var myCenter=new google.maps.LatLng(6.79566,79.8994);
        var markers = [];		// Keeping an array of markers to add to the map

        function initialize()
        {    // setting map properties
            var mapProp = {
                center:myCenter,
                zoom:15,
                streetViewControl: false,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById("googleMap"),mapProp);


                google.maps.event.addListener(map, 'click', function (event) {			// Placing a listener to add a marker on the map when clicked.
                    placeMarker($location);
                });


        }

        // Set markers on the map
        function setMapOnAll(map) {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(map);
            }
        }

        // Setting marker properties
        function placeMarker(location) {
            setMapOnAll(null);
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                label: 'O',
            });
            var infowindow = new google.maps.InfoWindow({			// Setting information windows for each marker
                content: 'Added by: ' + '' + '<br>Votes: ' + ''
            });
            infowindow.open(map,marker);
            marker.addListener('click',function(){			// Adding a listener to open the window when marker is clicked
                infowindow.open(map,marker);
            });
            markers.push(marker);		// Add the marker to the array
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
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
                <li><a href="location.html" class="scroll"><span> </span> Find Locations</a>
                    <div class="megapanel">
                        <div class="na-left">
                            <ul class="grid-img-list">
                                <li><a href="location.html">Find a Location  </a></li> |
                                <li><a href="addlocation.html">Add a location </a></li> |
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
                <li><a href="404.html" class="scroll"> <span class="service"> </span>Our Species</a></li>
                <li><a href="shop.html" class="scroll"><span class="mail"> </span>Shop </a></li>
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
                <li><a href="login.html"><i class="roc"> </i>My Account</a></li>
                <li><a href="register.html"><i class="phone"> </i>Sign Up</a></li>
                <li><a href="contact.html"><i class="mail"> </i>Contact</a></li>
                <div class="clearfix"> </div>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>


<!-- contact -->
<div class="container">
    <div class="contact-content">
        <div class="contact-info">
            <h2>Add Solution</h2>
            <div id="googleMap" style="width:1000px;height:300px;"></div>
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1609927.7974915467!2d144.41768979226285!3d-37.991357413515345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC%2C+Australia!5e0!3m2!1sen!2sin!4v1430308946781" width="100%" height="450" frameborder="0" style="border:0"></iframe>-->
        </div>

        <p> {{$issue->Description}}</p>
        <div class="contact-details">
            <form class="main-1" action="{{route('addSolution')}}" method="POST">
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    </div>
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-danger">
                        {{session('success')}}
                    </div>
                @endif

                <input hidden name="_token" value="{{csrf_token()}}">

                <input type="text" name="title" placeholder="Title" required/>
                <input type="text" name="cost" placeholder="Cost" required/>
                {{--<input type="text" name="issueNo" value={{$issue->Issue_No}} />--}}
                <textarea name="description" placeholder="Description"></textarea>
                {{--<input type="hidden" name="user" value={{user}}  />--}}
                <input type="submit" value="Submit"/>
            </form>
        </div>

    </div>
</div>

<!-- contact -->
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
            <p>	landmark,</p>
            <p>	California 123</p>
            <p>	Tel: 123-456-7890</p>
            <p>	Fax. +123-456-7890</p>
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
            <p>Copyrights © 2015 Location All rights reserved | Template by <a href="http://w3layouts.com/">&nbsp; W3layouts</a></p>
        </div>
    </div>
</div>
</body>
</html>