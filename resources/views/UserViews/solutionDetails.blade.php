@extends('layouts.master')

<!-- contact -->
@section('content')
<div class="container">
    <div class="contact-content">
        <div class="contact-info">
            <h2>Issue Details</h2>
            <div id="googleMap" style="width:1000px;height:300px;"></div>
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1609927.7974915467!2d144.41768979226285!3d-37.991357413515345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC%2C+Australia!5e0!3m2!1sen!2sin!4v1430308946781" width="100%" height="450" frameborder="0" style="border:0"></iframe>-->
        </div>


        <div class="contact-details">
            <form>
                <h4>Title</h4>
                <p>{{$solution->Title}}</p>
                <p>.                        </p>
                <h4>Submitter </h4>
                <p>{{$solution->Submitter}}</p>
                <p>.                        </p>
                <h4>Estimated Cost </h4>
                <p>{{$solution->EstimatedCost}}</p>
                <p>.                        </p>
                <h4>Date of submission </h4>
                <p>{{$solution->SubmittedDate}}</p>
                <p>.                        </p>
                <h4>Description </h4>
                <p>{{$solution->Description}}</p>
                <p>.                        </p>

                <a class="acount-btn" href="register_ph.html">Vote</a>
                <a class="acount-btn" href="register_ph.html">Add Solution</a>


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
@endsection
