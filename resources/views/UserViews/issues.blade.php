
<!DOCTYPE HTML>
<html>
<head>
    <title>S.O.S :: Issues</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/bootstrap1.css" rel="stylesheet" type="text/css" media="all">

    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Location Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>

    <script src="js/jquery.easydropdown.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Mega Menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <!-- Mega Menu -->
    <!--<script
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
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

            google.maps.event.addListener(map, 'click', function(event) {			// Placing a listener to add a marker on the map when clicked.
                placeMarker(event.latLng);
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
    </script>-->
</head>
<body>
<!-- banner -->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""></a>
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

<!--Issues-->

<!--<div class="addlocation">-->
<div class="container">
    <div class="main-page">
        <div class="photoday-section">
            <div class="col-md-4 photoday-grid">
                @foreach($issues as $issue)
                <script>
                   function addSolution(){
                       $issNo = $issue->Issue_No;     //??
                       $.ajax({
                           url: '{{url('solution')}}/' + $issNo,
                           success: function (data) {
//                               $('#restimes').html(data).show();
                           }
                       });
                   }
                </script>
                <div class="photoday">
                    <img src="images/p.jpg" class="img-responsive" alt="">
                    <div class="photo-text">

                        <h4>{{$issue->Title}}</h4>
                        <p><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>{{$issue->Location}}</p>
                        <input type="submit" value="Vote"/>
                        <li><a href="addSolution/{{$issue}}">Add Solution </a></li>
                    </div>
                    <div class="photo1">
                        <div class="col-md-4 phot-grid">
                            <p><i class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></i> 32,102 </p>
                        </div>
                        <div class="col-md-4 phot-grid">
                            <p><a href="#"><i class="glyphicon glyphicon-ok-circle" aria-hidden="true"></i> 1005 </a></p>
                        </div>
                        <div class="col-md-4 phot-grid">
                            <p><a href="#"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i> 17/04/16 </a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
<!-- 404 -->
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
            <p>Copyrights © 2015 Location All rights reserved.</p>
        </div>
    </div>
</div>

</body>
</html>