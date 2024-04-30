@extends('landing')

@section('frontEndContent')
    <link rel="stylesheet" href="{{ asset('Frontend/Styles/ProductDetails/productDetails.css') }}">
    <link rel="stylesheet" href="{{ asset('Libraries/FontAwesome/fontawesome.min.css') }}">
    <div class="container">
        <div class="product-view-container">

            <img src="{{ asset('UploadImgs/' . $productDetails->image) }}" alt="img">

            <div class="description">
                <div class="des-title">
                    {{ $productDetails->name }} {{ $productDetails->weight }}g
                </div>


                <div class="des-price">
                    Rs.{{ $productDetails->price }}.00
                </div>


                <div class="stock-status">
                    @if ($productDetails->quantity == 0)
                        <td><i class="fa-regular fa-circle-xmark" style="color: red; padding-right:10px;"></i>Out of Stock
                        </td>
                    @else
                        <td><i class="fa-regular fa-circle-check" style="color: green; padding-right:10px;"></i>In Stock
                        </td>
                    @endif
                </div>

                <div class="des-description">
                    {{ $productDetails->description }}
                </div>

                <div class="des-buttons">
                    <a href="{{ route('add-to-cart', $productDetails->id) }}">
                        <div class="button-add-to-cart">
                            <button><i class="fa-solid fa-cart-plus"> </i> Add To Cart</button>
                        </div>
                    </a>

                    <a href="{{ url('/checkout') }}">
                        <div class="button-buy-now">
                            <button><i class="fa-regular fa-money-bill-1"></i> </i> Buy Now</button>
                        </div>
                    </a>
                </div>

                <hr width="90%">

                <div class="payment-methods">
                    Cash On Delivery
                </div>

            </div>
        </div>
    </div>

    @if (session('success'))
        {{ session('success') }}

        <a href="{{ url('/cart') }}"><i class="fa-solid fa-cart-shopping" style="margin: 0px 10px"></i>My
            Cart</a>
    @endif


    <script src={{ asset('Frontend/Scripts/ProductDetails/productDetails.css') }}></script>
    <script src={{ asset('Libraries/FontAwesome/fontawesome.min.js') }}></script>
@endsection
