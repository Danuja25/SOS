@extends('layouts.master')

@section('content')

<!-- contact -->
<div class="container">
    <div class="contact-content">
        <div class="contact-info">
            <h2>Add Issue</h2>
            {{--Displaying the map to add a marker to indicate the position of the issue--}}
            <div id="googleMap" style="width:1280px;height:720px;"></div>

        </div>

        <div class="contact-details" >
            <form class="main-1" action="{{route('addIssue')}}" method="POST" enctype="multipart/form-data">

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

                <input type="text" id="lat"  name="maplat" placeholder="Latitude" />
                <input type="text" id="lng"  name="maplng" placeholder="Longitude"/>
                <input type="text" name="title" placeholder="Title" required/>
                <input type="text" name="city" placeholder="City" required/>
                <textarea name="description" placeholder="Description"></textarea>
                <label>Upload Image </label><input type="file" name="image" onchange="previewFile()"><br>
                <!--
                                <img src="" height="200" alt="Image preview...">
                -->
                <input type="submit" value="Submit"/>
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
    var myCenter=new google.maps.LatLng(6.79566,79.8994);
    var markers = [];		// Keeping an array of markers to add to the map
    var maploc;

    function initialize()
    {    // setting map properties
        var mapProp = {
            center:myCenter,
            zoom:15,
            streetViewControl: false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

        google.maps.event.addListener(map, 'click', function(event) {			// Placing a listener to add a marker on the map when clicked.
            placeMarker(event.latLng);
            maploc = event.latLng;
            document.getElementById("location").value=maploc;
            alert(document.getElementById("location").value);
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
        document.getElementById('lat').value = marker.getPosition().lat();
        document.getElementById('lng').value = marker.getPosition().lng();
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

@endsection