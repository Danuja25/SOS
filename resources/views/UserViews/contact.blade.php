@extends('layouts.master')

@section('content')


<!-- contact -->
<div class="container">
    <div class="contact-content">
        <div class="contact-info">
            <h2>Contact</h2>
            <div id="googleMap" style="width:720px;height:360px;"></div>
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1609927.7974915467!2d144.41768979226285!3d-37.991357413515345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC%2C+Australia!5e0!3m2!1sen!2sin!4v1430308946781" width="100%" height="450" frameborder="0" style="border:0"></iframe>-->
        </div>
        <div class="contact-details">
            <div class="col-md-4 con-left">
                <h4>Adress</h4>
                <p>No.238,</p>
                <p>Godagama, Matara,</p>
                <p>Sri Lanka</p>
            </div>
            <div class="col-md-4 con-left">
                <h4>Phones</h4>
                <p>Phone:(071) 8951411</p>
                <p>Fax: (000) 123 456 78 0</p>
            </div>
            <div class="col-md-4 con-left">
                <h4>E-mail :</h4>
                <p>Email: <a href="mailto:readyaim25@gmail.com">readyaim25@gmail.com</a></p>
                <p>Follow on: <a href="www.facebook.com/readyaim25">Facebook</a>, <a href="#">Twitter</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="contact-details">
            <form>
                <input type="text" placeholder="Name" required/>
                <input type="text" placeholder="Email" required/>
                <input type="text" placeholder="Phone" required/>
                <input type="text" placeholder="City Name" required/>
                <textarea placeholder="Message"></textarea>
                <input type="submit" value="SEND"/>
            </form>
        </div>

    </div>
</div>

<!-- contact -->

<script
        src="http://maps.googleapis.com/maps/api/js">
</script>
<script>
    var map;
    var myCenter=new google.maps.LatLng(5.969516, 80.520671);


    function initialize()
    {
        var mapProp = {
            center:myCenter,
            zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var marker = new google.maps.Marker({
            position: myCenter,
            map: map,
            title: 'Ready Aim Solutions'
        });


        map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        marker.setMap(map);

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

@endsection