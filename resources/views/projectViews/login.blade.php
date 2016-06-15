@extends('layouts.basic')

@section('content')<!-- login -->
<div class="login-page">
    <div class="container">
        <div class="account_grid">
            <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
                <h3>NEW USERS</h3>

                <p>Register in the system using your National ID and start raising your issues.</p>
                <a class="acount-btn" href="registerReq">As a Requster</a>
                <a class="acount-btn" href="registerPh">As a Philanthropist</a>
            </div>
            <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                <h3>REGISTERED USERS</h3>

                <p>If you have an account with us, please log in.</p>

                <form action="{{route('login')}}" method="POST">

                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                {{$error}}
                            @endforeach
                        </div>
                    @endif


                    <input hidden name="_token" value="{{csrf_token()}}">

                    <div>
                        <span>User name<label>*</label></span>
                        <input type="text" name="Username">
                    </div>
                    <div>
                        <span>Password<label>*</label></span>
                        <input type="password" name="Password">
                    </div>
                    {{--<a class="forgot" href="#">Forgot Your Password?</a>--}}
                    <input type="submit" value="Login">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- login -->

@endsection