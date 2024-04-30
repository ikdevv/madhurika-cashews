@extends('landing')

@section('frontEndContent')
    <link rel="stylesheet" href="{{ asset('Frontend/Styles/Cart/cart.css') }}">


    <div class="cart-container">

        <div class="cart-header">
            <div class="title">
                Cart
            </div>

        </div>


        @if (session('cart'))
            @foreach (session('cart') as $product_id => $details)
                <div class="cart-items">

                    <div class="id">
                        <h3>{{ $product_id }}</h3>
                    </div>

                    <img src="{{ asset('UploadImgs/' . $details['image']) }}" alt="image">

                    <div class="name">
                        <h3>{{ $details['name'] }}</h3>
                    </div>

                    <div class="price">
                        <h3>Price - Rs.{{ $details['price'] }}.00</h3>
                    </div>

                    <div class="quantity">

                        <h3>qty - <input type="number" class="quantity-input" value="{{ $details['quantity'] }}"
                                min="1"></h3>

                    </div>

                    <div class="delete-button">
                        <button class="btnDeleteCartItem" data-product-id="{{ $product_id }}}">
                            <i class="fa-solid fa-trash-can" style="font-size: 20px"></i>
                        </button>
                    </div>

                </div>
            @endforeach



            <div class="end-button-container">


                <a href="{{ url('/products') }}">
                    <button>Continue Shopping</button>
                </a>

                <a href="{{ url('/checkout') }}">
                    <button class=>
                        Proceed to Checkout
                    </button>
                </a>
            </div>
        @elseif (!session('cart'))
            <div class="empty-cart">
                <i class="fa-regular fa-face-sad-tear" style="font-size: 75px"></i>
                <h1>Your Cart is Empty</h1>
                <a href="{{ url('/products') }}">
                    <button>Continue Shopping</button>
                </a>
            </div>
        @endif


    </div>

    <script src="{{ asset('Frontend/Scripts/Cart/cart.js') }}"></script>
@endsection
