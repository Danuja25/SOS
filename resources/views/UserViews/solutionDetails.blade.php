@extends('layouts.master')


@section('content')
    <div class="container">
        <div class="contact-content">
            <div class="contact-info">
                <h2>Solution Details</h2>




            <div class="contact-details">
                <form>
                    <h4>Title</h4>

                    <p>{{$solution->Title}}</p>

                    <p>. </p>
                    <h4>Submitter </h4>

                    <p>{{$solution->Submitter}}</p>

                    <p>. </p>
                    <h4>Estimated Cost </h4>

                    <p>{{$solution->EstimatedCost}}</p>

                    <p>. </p>
                    <h4>Date of submission </h4>

                    <p>{{$solution->SubmittedDate}}</p>

                    <p>. </p>
                    <h4>Description </h4>

                    <p>{{$solution->Description}}</p>

                    <p>. </p>

                    <button class="acount-btn" onclick="toggleVote({{$solution->Solution_No}})" id="voteBtn">
                        {{$solution->hasVote() ? "Cancel Vote":"Vote"}}
                    </button>

                </form>
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
