@extends('frontend.home')

@section('frontEndContent')
    <link rel="stylesheet" href="{{ asset('Frontend/Styles/Contact/contactUs.css') }}">
    <div class="contact-us-container">
        <div class="contact-us-title">
            <h2>
                Get In Touch With Us
            </h2>

            <p>Have Any Question?
                We Are Here To Help You</p>
        </div>

        <div class="content-container">

            <div class="content">

                <i class="fa-solid fa-phone" style="font-size: 40px"></i>


                <h4>
                    Call Us
                </h4>

                <h3>Do you have any questions? Just pick up the phone and feel free to call us</h3>
                <p>
                    +8801712345678
                </p>
            </div>

            <div class="content">

                <i class="fa-regular fa-envelope" style="font-size: 40px"></i>

                <h4>
                    Mail Us
                </h4>

                <h3>Do you have any suggesions? Just open up your email and feel free to tell us</h3>
                <p>
                    lorem@gmail.com

                </p>
            </div>

            <div class="content">

                <i class="fa-solid fa-house" style="font-size: 40px"></i>

                <h4>
                    We Are Here
                </h4>

                <h3>Do you live near us feel free to visit us</h3>
                <p>
                    No.123 Lorem rd,<br>
                    Lorem Ipsum

                </p>
            </div>
        </div>


    </div>
@endsection
