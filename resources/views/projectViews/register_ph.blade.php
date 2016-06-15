
@extends('layouts.basic')

@section('content')
<!-- registration -->
<form class="main-1"  action="{{route('registerPh')}}" method="POST">
    <div class="container">
            <div class="register">
                <div class="register-top-grid">
                    <h3>PERSONAL INFORMATION</h3>           {{-- getting personal information from the user--}}

                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                {{$error}}
                            @endforeach
                        </div>
                    @endif

                    @if(session()->has('success'))
                        <div class="alert alert-danger">
                            {{session('success')}}
                        </div>
                    @endif

                    <input hidden name="_token" value="{{csrf_token()}}">       {{--Setting the csrf token to prevent unauthorized access--}}

                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span class="">First Name<label>*</label></span>
                         <input type="text" name="fname" required value="{{old('fname')}}">      {{--Getting information from the user and keeping the previously entered value for ease of use--}}
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Last Name<label>*</label></span>
                        <input type="text" name="lname" required value="{{old('lname')}}">
                    </div>

                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>NID No<label>*</label></span>
                        <input type="text" name="nic" required value="{{old('nic')}}">
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Contact No.<label></label></span>
                        <input type="text" name="contact" required value="{{old('contact')}}">
                    </div>
                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>Occupation<label>*</label></span>
                        <input type="text" name="occupation" required value="{{old('occupation')}}">
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Place of work<label></label></span>
                        <input type="text" name="workplace" required value="{{old('workplace')}}">
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>City<label></label></span>
                        <input type="text" name="city" required value="{{old('city')}}">
                    </div>

                    <div class="clearfix"> </div>                                       {{--Trust verification from the user--}}
                    <a class="news-letter" href="#">
                        <input type="checkbox" name="terms-check" id="terms-check"
                               @if(old('checkbox')) checked @endif>
                        <i> </i>I certify that these details are correct </a>
                </div>
                <div class="register-bottom-grid">
                    <h3>LOGIN INFORMATION</h3>                                      {{--Getting login information from the user--}}
                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>Username<label>*</label></span>
                        <input type="text" name="username" required value="{{old('username')}}">

                    </div>
                </div>

                <div class="clearfix"> </div>

                <div class="register-bottom-grid">
                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>Password<label>*</label></span>
                        <input type="password" name="password" required>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Confirm Password<label>*</label></span>
                        <input type="password" name="password_confirmation" required>
                    </div>
                </div>

                <div class="clearfix"> </div>
                <div class="register-but">

                        <input type="submit" value="submit">            {{--Sending values to the database--}}
                        <div class="clearfix"> </div>

                </div>
            </div>

    </div>
</form>
<!-- registration -->

@endsection