@extends('layouts.master')

@section('content')
    <div class="loc-top">
        <h3>Solutions provided</h3>
        @foreach($solutions as $solution)

            <div class="air">
                <li class="wicked">{{$solution->Title}}</li>
                <li class="mullet">{{$solution->Submitter}}</li>
                <li class="see"><a href= "solutionDetails/{{$solution->Solution_No}}">View Details</a></li>
                <li class="loc"><a>{{$solution->No_of_votes}}</a></li>
            </div>

        @endforeach
    </div>
@endsection
