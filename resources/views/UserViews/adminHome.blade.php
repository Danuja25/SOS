
@extends('layouts.master')

@section('content')

    <div class="banner">            {{--Showing the current issues on the map using markers--}}
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

    </div>
</div>
<div class="loc-lov">
    <div class="container">

        <div class="loc-right">
            <div class="loc-top">

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

    <script             {{--Getting the Google Maps API from the server--}}
            src="http://maps.googleapis.com/maps/api/js">
    </script>
    <script>
        var map;
        var myCenter=new google.maps.LatLng(5.969516, 80.520671);


        function initialize()           /*Initializing the map and setting the type,center and zoom level of the map*/
        {
            var mapProp = {
                center:myCenter,
                zoom:15,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var marker = new google.maps.Marker({           /*Setting up markers*/
                position: myCenter,
                map: map,
                title: 'Ready Aim Solutions'
            });


            map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
            marker.setMap(map);

        }
        google.maps.event.addDomListener(window, 'load', initialize);    /* Event listener to load the map*/
    </script>

@endsection



