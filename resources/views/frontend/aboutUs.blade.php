@extends('frontend.home')

@section('frontEndContent')
    <link rel="stylesheet" href="{{ asset('Frontend/Styles/About/aboutUs.css') }}">

    <div class="about-us-container">
        <h1>About Us</h1>
        <p>Welcome to our website! We are a leading provider of high-quality products and services. Our team is dedicated to
            delivering exceptional value to our customers through our innovative solutions and unparalleled customer
            service.</p>
        <h2>Our Mission</h2>
        <p>Our mission is to provide our customers with the best possible products and services, and to help them achieve
            their goals and objectives. We are committed to delivering innovative solutions that meet the unique needs of
            each and every one of our customers.</p>


        <h2>Our Team</h2>

        <div class="team-container">
            <div class="team-member">
                <img src="{{ asset('Frontend/Images/teammale.png') }}" alt="Team Member 1">
                <h3>Mr.R.M.R.U Rathnayake</h3>
                <p>Founder & CEO</p>
            </div>
            <div class="team-member">
                <img src="{{ asset('Frontend/Images/teammale.png') }}" alt="Team Member 2">
                <h3>Mr.A.K.Bandara</h3>
                <p>Marketing Leader</p>
            </div>

            <div class="team-member">
                <img src="{{ asset('Frontend/Images/teamfemale.png') }}" alt="Team Member 3">
                <h3>Ms.K.M. Roshini</h3>
                <p>Chief Financial Officer</p>
            </div>

            <div class="team-member">
                <img src="{{ asset('Frontend/Images/teamfemale.png') }}" alt="Team Member 4">
                <h3>Ms.H.R.Deshapriya</h3>
                <p>Project Manager</p>
            </div>

            <div class="team-member">
                <img src="{{ asset('Frontend/Images/teamfemale.png') }}" alt="Team Member 5">
                <h3>Ms.H.S. Konara</h3>
                <p>Director of Human Resources</p>
            </div>

            <div class="team-member">
                <img src="{{ asset('Frontend/Images/teammale.png') }}" alt="Team Member 6">
                <h3>Mr.H.M. Mudalige</h3>
                <p>Technical Head</p>
            </div>


        </div>
        <h2>Testimonials</h2>
        <div class="testimonials-container">
            <div class="testimonial">
                <p>"I love working with this company! They are always responsive and helpful, and their products are
                    top-notch."</p>
                <h3>Customer 1</h3>
            </div>
            <div class="testimonial">
                <p>"I've been using their services for years, and I've never been disappointed. They are true
                    professionals."</p>
                <h3>Customer 2</h3>
            </div>
            <div class="testimonial">
                <p>"I've been using their services for years, and I've never been disappointed. They are true
                    professionals."</p>
                <h3>Customer 2</h3>
            </div>
            <div class="testimonial">
                <p>"I've been using their services for years, and I've never been disappointed. They are true
                    professionals."</p>
                <h3>Customer 2</h3>
            </div>
            <!-- More testimonials... -->
        </div>
    </div>
@endsection
