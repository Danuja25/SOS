@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="contact-content">
            <div class="contact-info">
                <h2>Issue Details</h2>
                {{-- Displaying the position of the issue on the map--}}
                <div id="googleMap" style="width:1000px;height:300px;"></div>

            </div>

            <div class="contact-details">
                <h4>Title</h4>

                <p>{{$issue->Title}}</p>

                <p>. </p>
                <h4>Submitter </h4>

                <p>{{$issue->Submitter}}</p>

                <p>. </p>
                <h4>City </h4>

                <p>{{$issue->Location}}</p>

                <p>. </p>
                <h4>Date of submission </h4>

                <p>{{$issue->SubmittedDate}}</p>

                <p>. </p>
                <h4>Description </h4>

                <p>{{$issue->Description}}</p>

                <p>. </p>

                {{--Voting and adding solution for the issue--}}
                <button class="acount-btn" onclick="toggleVote({{$issue->Issue_No}})" id="voteBtn">
                    {{$issue->hasVote() ? "Cancel Vote":"Vote"}}
                </button>
                <a class="acount-btn" href="{{url('addSolution/'.$issue->Issue_No)}}">Add Solution</a>
            </div>
        </div>
    </div>

    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        var map;
        var markers = [];		// Keeping an array of markers to add to the map

        function initialize() {    // setting map properties

            var lat = {{$issue->MapLat}};
            var lng = {{$issue->MapLng}};
            var myLatLng = {lat: lat, lng: lng};

            var mapProp = {
                center: myLatLng,
                zoom: 15,
                streetViewControl: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            placeMarker(myLatLng);
//            google.maps.event.addListener(map, 'click', function (event) {			// Placing a listener to add a marker on the map when clicked.
//                placeMarker(event.latLng);
//            });
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
                content: '' + myCenter
            });
            infowindow.open(map, marker);
//            marker.addListener('click', function () {			// Adding a listener to open the window when marker is clicked
//                infowindow.open(map, marker);
//            });
            markers.push(marker);		// Add the marker to the array
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <script>
        function toggleVote(issueNo) {
            $.ajax({
                url: "{{url('toggleVote')}}/" + issueNo,
                type: "post",
                data: {
                    _token: '{{csrf_token()}}'
                },
                success: function (response) {
                    if (response.status == 1) {
                        $("#voteBtn").html("Cancel Vote");
                    }
                    else {
                        $("#voteBtn").html("Vote");
                    }
                },
                error: function () {
                    alert("Unable to vote!");
                }
            });
        }
    </script>
@endsection