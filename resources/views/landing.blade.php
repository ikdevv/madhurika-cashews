    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Styles --}}

        <link rel="stylesheet" href="{{ asset('Frontend/Styles/nav.css') }}">

        <link rel="stylesheet" href="{{ asset('Libraries/FontAwesome/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Libraries/SwiperJs/swiper-bundle.min.css') }}">

        <link rel="stylesheet" href="{{ asset('Frontend/Styles/Home/home.css') }}">
        <link rel="stylesheet" href="{{ asset('Frontend/Styles/footer.css') }}">




        {{-- Styles --}}
        <title>Laravel</title>
    </head>

    <body>
        {{-- Navigation --}}

        <header class="header" id="header_">
            <nav class="nav">
                <a href="#" class="nav-logo"><span>Madhurika</span>Cashews</a>

                <div class="nav-menu" id="nav_menu">
                    <ul class="nav-list">
                        <li>
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/products') }}" class="nav-link">Products</a>
                        </li>
                        <li>
                            <a href="{{ url('/contactUs') }}" class="nav-link">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{ url('/aboutUs') }}" class="nav-link">About Us</a>
                        </li>
                        {{--    <li>
                        <a href="{{ url('/contactUs') }}" class="nav-link">Login/Register</a>
                    </li> --}}

                        <!-- Right Side Of Navbar -->

                        <!-- Authentication Links -->

                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li>
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a class="nav-link" id="dropdown_btn" href="#" role="button" aria-haspopup="true"
                                    aria-expanded="false">
                                    {{ Auth::user()->name }}
                                    <i class="fa-solid fa-caret-down" style="margin-left:5px; font-size:15px "></i>
                                </a>
                            </li>

                            <div class="account-dropdown" id="account_dropdown">

                                <div class="drop-down-items">

                                    <div class="drop-down-item">
                                        <a href="{{ url('/cart') }}"><i class="fa-solid fa-cart-shopping"
                                                style="margin: 0px 10px"></i>My
                                            Cart</a>
                                    </div>


                                    <div class="drop-down-item">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa-solid fa-right-from-bracket" style="margin: 0px 10px"></i>Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>


                            </div>
                        @endguest


                    </ul>

                    <div class="nav-close" id="nav_close">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>

                <div class="nav-toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </nav>
        </header>

        <main>
            @yield('frontEndContent')
        </main>

        <footer>
            <div class="footer-container">
                <div class="footer-content">
                    <div class="footer-logo">
                        <h3>madhurikaCashews</h3>
                    </div>

                    <div class="slogan">
                        Your one stop shop for all your cashew needs
                    </div>
                </div>

                <div class="footer-content1">

                    <h4>Get in Touch</h4>

                    <li class="sub-title">Email</li>
                    <li class="content">lorem@gmail.com</li>

                    <li class="sub-title">Phone</li>
                    <li class="content">lorem@gmail.com</li>

                    <li class="sub-title">Address</li>
                    <li class="content">No.123 Lorem rd, Lorem Ipsum</li>


                </div>

                <div class="footer-content">

                    <h4>Quick Links</h4>


                    <li class="content"><a href="{{ url('/') }}">Home</a></li>

                    <li class="content"><a href="{{ url('/products') }}">Products</a></li>

                    <li class="content"><a href="{{ url('/') }}">Contact Us</a></li>

                    <li class="content"><a href="{{ url('/') }}">Login</a></li>

                    <li class="content"><a href="{{ url('/') }}">Register</a></li>

                </div>
            </div>
        </footer>


        {{-- Scripts --}}

        <script src="{{ asset('Frontend/Scripts/footer.js') }}"></script>
        <script src="{{ asset('Libraries/FontAwesome/fontawesome.min.js') }}"></script>
        <script src="{{ asset('Libraries/SwiperJs/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('Libraries/JQuery/JQuery.js') }}"></script>
        <script src="{{ asset('Frontend/Scripts/Home/home.js') }}"></script>
        <script src="{{ asset('Frontend/Scripts/nav.js') }}"></script>


    </body>
