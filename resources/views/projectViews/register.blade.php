
<!DOCTYPE HTML>
<html>
<head>
    <title>S.O.S :: Register</title>
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
    <!-- Mega Menu -->
    <script>

        function formValidation() {

//		get all the inputs given to the form into variables
            var fname = document.mainForm.fname;
            var lname = document.mainForm.lname;
            var nid = document.mainForm.nid;
            var add = document.mainForm.add;
            var uname = document.mainForm.uname;
            var pass = document.mainForm.pass;
            var conpass = document.mainForm.conpass;

            // check whether the inputs areas expected
            if (lengthValidation(fname, lname, nid, uname, pass, conpass)) {
                if (unameCheck(uname)) {
                    return true;
                }
            }

            return false;
        }

        // Validate that all the required fields are filled.
        function lengthValidation(fname,lname,nid,uname,pass,conpass){
            var fname_len = fname.value.length;
            var lname_len = lname.value.length;
            var add_len = add.value.length;
            var uname_len = uname.value.length;
            var nid_len = nid.value.length;
            var pass_len = pass.value.length;
            var conpass_len = conpass.value.length;

            if(fname_len==0){				// validating frst name field
                alert("Please fill out this section!");
                fname.focus();
                return false;
            }

            if(lname_len==0){				// validating last name field
                alert("Please fill out this section!");
                lname.focus();
                return false;
            }

            if(nid_len==0){					// validating NID field
                alert("Please fill out this section!");
                nid.focus();
                return false;
            }

            if(uname_len==0){				// validating username field
                alert("Please fill out this section!");
                uname.focus();
                return false;
            }

            if(pass_len==0){				// validating password field
                alert("Please fill out this section!");
                pass.focus();
                return false;
            }

            if(conpass_len==0){				// validating confirm password field
                alert("Please fill out this section!");
                conpass.focus();
                return false;
            }

            if(nid_len!=10){				// validating the NID field has an input with 10 chars long.
                alert("Please enter a correct NID!");
                nid.focus();
                return false;
            }

        }

        // Check whether the username only has characters and numbers.
        function unameCheck(uname){

            var chars = /^[0-9a-zA-Z]+$/;		// Validate according to the regular expression
            if(uname.value.match(chars)){
                return true;
            }
            else{
                alert("Username should consist only letters and numbers!");
                uname.focus();
                return false;
            }


        }

    </script>
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
<!-- registration -->
<form class="main-1"  onsubmit="return formValidation();">
    <div class="container">
        <form name="mainForm">
            <div class="register">
                <>

                <div class="register-top-grid">
                    <h3>PERSONAL INFORMATION</h3>
                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span class="">First Name<label>*</label></span>
                        <form> <input type="text" name="fname" required> </form>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Last Name<label>*</label></span>
                        <input type="text" name="lname" required>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>NID No<label>*</label></span>
                        <input type="text" name="nid" required>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Address<label></label></span>
                        <input type="text" name="add" required>
                    </div>

                    <div class="clearfix"> </div>
                    <a class="news-letter" href="#">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>I certify that these details are correct</label>
                    </a>
                </div>
                <div class="register-bottom-grid">
                    <h3>LOGIN INFORMATION</h3>
                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>Username<label>*</label></span>
                        <input type="text" name="uname" required>

                    </div>
                </div>

                <div class="clearfix"> </div>
                <div class="register-but">
                    <form>
                        <input type="button" value="Check Availability">
                        <div class="clearfix"> </div>
                    </form>
                </div>
                <div class="register-bottom-grid">
                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>Password<label>*</label></span>
                        <input type="password" name="pass" required>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Confirm Password<label>*</label></span>
                        <input type="password" name="conpass" required>
                    </div>
                </div>

                <div class="clearfix"> </div>
                <div class="register-but">
                    <form>
                        <input type="submit" value="submit">
                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>
        </form>
    </div>
</form>
<!-- registration -->
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