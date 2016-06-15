@extends('layouts.master')

@section('content')
    <div class="register-bottom-grid"><h2>Users</h2></div>
    <div class="register-bottom-grid"><h3></h3></div>
    <div class="bs-example4" data-example-id="contextual-table">
        <table class="table">
            <script>
                a = 1;
            </script>
            @foreach($users as $user)
                <script>
                    document.getElementById("num").innerHTML = a;
                    a++;
                </script>
                <thead>
                <tr>
                    <th id="num"></th>
                    <th>{{$user->NID}} </th>
                    <th>{{$user->Role}}</th>

                </tr>
                </thead>

            @endforeach


        </table>
    </div>
@endsection