@extends('landing')

<link rel="stylesheet" href="{{ asset('Libraries/FontAwesome/fontawesome.min.css') }}">
@section('frontEndContent')
    <section class="home">
        <div class="home-container">
            <div class="home-data">
                <div thumbsSlider="" class="home-titles swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <h1 class="home-title">
                                Find Your Flavor
                            </h1>
                        </div>

                        <div class="swiper-slide">
                            <h1 class="home-title">
                                Looking For a Perfect Gift
                            </h1>
                        </div>

                        <div class="swiper-slide">
                            <h1 class="home-title">
                                Make Moments Magical
                            </h1>
                        </div>
                    </div>
                </div>

                <a href="{{ url('/products') }}" class="home-button">
                    See Products <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>



            <div class="home-images">
                <div class="home-swiper swiper">
                    <div class="swiper-wrapper">
                        <article class="home-article swiper-slide">

                            <div class="home-card">
                                <div class="home-circle home-circle-1"></div>
                                <img src="{{ asset('Frontend/Images/img1.png') }}" alt="img" class="home-img-1">
                            </div>

                        </article>



                        <article class="home-article swiper-slide">

                            <div class="home-card">
                                <div class="home-circle home-circle-2"></div>
                                <img src="{{ asset('Frontend/Images/img2.png') }}" alt="img" class="home-img-1">

                            </div>

                        </article>


                        <article class="home-article swiper-slide">

                            <div class="home-card">
                                <div class="home-circle home-circle-3"></div>
                                <img src="{{ asset('Frontend/Images/img3.png') }}" alt="img" class="home-img-1">

                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <h1 class="did-you-know-title">Did You Know</h1>
    <ol class="did-you-know">
        <li style="--accent-color: #FF6F00">
            <div class="descr">Cashew kernel contains 47% fat and 82% of this fat is an unsaturated fatty acid that lowers
                the blood cholesterol level. In addition, cashew nuts also contain vitamins A, D and E.
            </div>
        </li>
        <li style="--accent-color: #008DC2">
            <div class="descr">Cashew nuts are native to Brazil but made their way to India in 1560 through the Portuguese
                sailors and thereafter spread throughout Asia.
            </div>
        </li>
        <li style="--accent-color: #0B456A">
            <div class="descr">Sri Lankan Cashews are known for their distinct and unique milky flavour and are perfect for
                curry, deserts and adding natural flavouring such as chilli or cinnamon.
            </div>
        </li>
        <li style="--accent-color: #6A829A">
            <div class="descr">Cashew nuts are often used as a substitute for milk or cream in vegan diets. Cashews are
                also used in cheese alternatives.
            </div>
        </li>
    </ol>

    <div class="who-are-we-container">
        <div class="who-are-we-content">
            <div class="who-are-we-title">
                Who Are We
            </div>

            <div class="des">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quo explicabo assumenda hic illum. Ratione hic,
                maxime repellendus minima unde labore, repellat, beatae tenetur aspernatur numquam corporis necessitatibus
                repudiandae commodi?
            </div>
        </div>
    </div>


    <div class="our-products-container">

        <div class="our-products-title">
            Our Products
        </div>
        <div class="img-container">
            <img src="{{ asset('UploadImgs/Packet1_1714159164.png') }}" alt="">
            <img src="{{ asset('UploadImgs/Packet_2_1714370943.png') }}" alt="">
            <img src="{{ asset('UploadImgs/Packet_3_1714359278.png') }}" alt="">
            <img src="{{ asset('UploadImgs/Packet_4_1714392285.jpg') }}" alt="">
            <img src="{{ asset('UploadImgs/Packet_5_1714392460.jpg') }}" alt="">
            <img src="{{ asset('UploadImgs/Packet_3_1714392137.png') }}" alt="">
        </div>
        <a href="{{ url('/products') }}">
            <div class="button-see-all-products">
                See All Products
            </div>
        </a>

    </div>

    <script src="{{ asset('Libraries/FontAwesome/fontawesome.min.js') }}"></script>
@endsection
