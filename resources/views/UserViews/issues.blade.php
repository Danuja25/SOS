@extends('layouts.master')

@section('content')
        <!--<div class="addlocation">-->
<div class="container">
    <div class="main-page">
        <div class="photoday-section">
            <div class="col-md-12 photoday-grid">
                @foreach($issues as $issue)         {{--Getting the passed issues array--}}
                    <div class="col-md-4">
                        <div class="photoday">
                            <input type="hidden" value="{{$issue->Issue_No}}" id="issueNo">
                           {{-- Displaying the relevant image for the issue --}}
                            <img src={{asset("/images/Issues")."/".($issue->Image?:'background-textures-4-Computer-Backgrounds-1024x640.jpg')}}  height="200px" width="400"  alt="">

                            <div class="photo-text">        {{--Displaying the information regarding the issue--}}
                                <h4>{{$issue->Title}}</h4>

                                <p><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>{{$issue->Location}}
                                </p>
                                {{--Toggle button to vote or unvote for the issues--}}
                                <div class="toggle-button @if($issue->hasVote()) toggle-button-selected @endif"
                                     id="vote{{$issue->Issue_No}}" onclick="toggleVote({{$issue->Issue_No}})">
                                    <button></button>
                                </div>
                                <li><a href="addSolution/{{$issue->Issue_No}}">Add Solution </a></li>
                                <li><a href="issDetails/{{$issue->Issue_No}}">View Details</a></li>
                                <li><a href="solutions/{{$issue->Issue_No}}">View Solutions</a></li>
                            </div>

                            <div class="photo1">
                                <div class="col-md-4 phot-grid">
                                    <p><i class="glyphicon glyphicon-thumbs-up"
                                          aria-hidden="true"></i> {{$issue->No_of_votes}} </p>
                                </div>
                                <div class="col-md-4 phot-grid">
                                    <p><a href="#"><i class="glyphicon glyphicon-ok-circle"
                                                      aria-hidden="true"></i> {{$issue->Issue_No}} </a></p>
                                </div>
                                <div class="col-md-4 phot-grid">
                                    <p><a href="#"><i class="glyphicon glyphicon-calendar"
                                                      aria-hidden="true"></i> {{$issue->SubmittedDate}} </a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    function toggleVote(issueNo) {                  /*Toggling the vote of the current user*/
        $.ajax({
            url: "{{url('toggleVote')}}/" + issueNo,
            type: "post",
            data: {
                _token: '{{csrf_token()}}'
            },
            success: function (response) {              /*Changing button position and color when enacted*/
                $("#vote" + issueNo).toggleClass('toggle-button-selected');
            },
            error: function () {
                alert("Unable to vote!");       /*Returning if an error occured*/
            }
        });
    }
</script>
@endsection