@extends('layouts.phMaster')

@section('content')

    <div class="banner">             {{--Showing the current issues on the map using markers--}}
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
            <div class="loc-left">
                <ul>
                    <li><a href="#"><i class="adm"></i></a></li>
                    <li><a href="#"><i class="set"></i></a></li>
                    <li><a href="#"><i class="str"></i></a></li>
                    <li><a href="#"><i class="plc"></i></a></li>
                    <li><a href="#"><i class="plus"></i></a></li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="loc-right">
                <div class="loc-top">
                    <h3>Solutions you’ve Added</h3>         {{--Displaying the solutions added by the current user--}}

                    @foreach($addedSolutions as $solution)          {{--Showing solutions using the issues passed from the User Controller--}}
                        <div class="blas">
                            <li class="wicked">{{$solution->Title}} </li>
                            <li class="mullet">{{$solution->EstimatedCost}}</li>
                            <li class="see"><a href="#">Check issue</a></li>
                            <li class="com"><a >{{$solution->No_of_votes}}</a></li>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

@endsection