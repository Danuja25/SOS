@extends('layouts.master')

@section('content')
    <div class="loc-lov">
        <div class="container">
            <div class="loc-right">
                <div class="loc-top">
                    <h3>Solutions provided</h3>
                    @foreach($solutions as $solution)

                        <div class="air">
                            <li class="wicked">{{$solution->Title}}</li>
                            <li class="mullet">{{$solution->Submitter}}</li>
                            <li class="see">
                                <a href="{{url('solutionDetails',['solutionNo'=>$solution->Solution_No])}}">View
                                    Details</a>
                            </li>
                            <div class="toggle-button @if($solution->hasVote()) toggle-button-selected @endif"
                                 id="vote{{$solution->Solution_No}}" onclick="toggleVote({{$solution->Solution_No}})">
                                <button></button>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleVote(solutionNo) {
            $.ajax({
                url: "{{url('toggleSolVote')}}/" + solutionNo,
                type: "post",
                data: {
                    _token: '{{csrf_token()}}'
                },
                success: function (response) {
                    $("#vote" + solutionNo).toggleClass('toggle-button-selected');
                },
                error: function () {
                    alert("Unable to vote!");
                }
            });
        }
    </script>
@endsection
