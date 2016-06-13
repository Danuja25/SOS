@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="contact-content">
            <div class="contact-info">
                <h2>Issue Details</h2>

                <div id="googleMap" style="width:1000px;height:300px;"></div>
                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1609927.7974915467!2d144.41768979226285!3d-37.991357413515345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC%2C+Australia!5e0!3m2!1sen!2sin!4v1430308946781" width="100%" height="450" frameborder="0" style="border:0"></iframe>-->
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
        var myCenter = new google.maps.LatLng(6.79566, 79.8994);
        var markers = [];		// Keeping an array of markers to add to the map

        function initialize() {    // setting map properties
            var mapProp = {
                center: myCenter,
                zoom: 15,
                streetViewControl: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

            google.maps.event.addListener(map, 'click', function (event) {			// Placing a listener to add a marker on the map when clicked.
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
            infowindow.open(map, marker);
            marker.addListener('click', function () {			// Adding a listener to open the window when marker is clicked
                infowindow.open(map, marker);
            });
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