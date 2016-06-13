@extends('layouts.master')

@section('content')
    <div class="loc-top">
        <h3>Solutions provided</h3>
        @foreach($solutions as $solution)


                <li class="wicked">{{$solution->Title}}</li>
                <li class="mullet">{{$solution->Submitter}}</li>
                <li class="see"><a href="#">Check location</a></li>
                <li class="loc"><a>{{$solution->No_of_votes}}</a></li>

        @endforeach
    </div>
@endsection
