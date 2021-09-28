@extends('main.layout.mainlayout');

@section('title', 'Welcome')

@section('content')
<div class="header-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 hi-item">
                <div class="hs-icon">
                    <img src="{{ asset('images/main/mainlayout/icons/map-marker.png') }}" alt="">
                </div>
                <div class="hi-content">
                    <h6>Hospital st,</h6>
                    <p>Jaffna Sri Lanka</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 hi-item">
                <div class="hs-icon">
                    <img src="{{ asset('images/main/mainlayout/icons/clock.png') }}" alt="">
                </div>
                <div class="hi-content">
                    <h6>Opening Hours</h6>
                    <p>Mon - Sat: 8:00 - 19:00</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 hi-item">
                <div class="hs-icon">
                    <img src="{{ asset('images/main/mainlayout/icons/phone.png') }}" alt="">
                </div>
                <div class="hi-content">
                    <h6>+94 76 5544321</h6>
                    <p>Call us now!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 hi-item">
                <div class="hs-icon">
                    <img src="{{ asset('images/main/mainlayout/icons/calendar.png') }}" alt="">
                </div>
                <div class="hi-content">
                    <h6>Make an appointment</h6>
                    <p>call or login</p>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="hero-section image-overlay">
    <div class="hero-slider owl-carousel">
      
        <div class="hs-item set-bg text-white" data-setbg="{{ asset('images/main/index/bg_doctor.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <h2>Get your Covid Vaccine Appointment</h2>
                        <p>
                        </p>
                   
                    </div>
                </div>
            </div>
        </div>
    
        <div class="hs-item set-bg text-white" data-setbg="{{ asset('images/main/index/doctor_group.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <h2></h2>
                        <p>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="banner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 banner-text text-white">
                <h4>Register now to make your vaccine appointment.</h4>
               
                <a href="/registerp" class="site-btn sb-light">Register</a>
            </div>
            <div class="col-lg-5 text-lg-right">
               
            </div>
        </div>
    </div>
</section>

<section class="about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img src="{{ asset('images/main/index/child.jpg') }}" alt="">
            </div>
            <div class="col-lg-7 about-text">
                <h2>Getting a COVID-19 Vaccine with Other Vaccines</h2>
                <p>You can get a COVID-19 vaccine and other vaccines at the same visit. You no longer need to wait 14 days between vaccinations. Experience with other vaccines has shown that the way our bodies develop protection, known as an immune response, after getting vaccinated and possible side effects of vaccines are generally the same when given alone or with other vaccines. Learn more about the timing of other vaccines.</p>
            </div>
        </div>
    </div>
</section>






@endsection