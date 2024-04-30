@extends('landing')

@section('frontEndContent')
    <link rel="stylesheet" href="{{ asset('Frontend/Styles/Checkout/checkout.css') }}">

    <div class="checkout-container">

        <div class="billing-details-container">

            <div class="title">
                <h2>Billing Details</h2>
            </div>

            <div class="form-add-billing-details">

                <form action="{{ url('/addbilling') }}" method="POST">
                    @csrf

                    <div class="input-name">
                        <label>First Name</label>
                        <input type="text" name="firstName" placeholder="First Name">

                        @error('firstName')
                            <small>{{ $message }}</small>
                        @enderror

                        <label>Last Name</label>
                        <input type="text" name="lastName" placeholder="Last Name">

                        @error('lastName')
                            <small>{{ $message }}</small>
                        @enderror

                    </div>

                    <div class="input-address">
                        <label>Province</label>
                        <select name="province" id="">

                            <option value="northWestern">North Western</option>
                            <option value="northern">Northern</option>
                            <option value="western">Western</option>
                            <option value="northCentral">North Central</option>
                            <option value="central">Central</option>
                            <option value="sabaragamuwa">Sabaragamuwa</option>
                            <option value="eastern">Eastern</option>
                            <option value="uwa">Uwa</option>
                            <option value="uwa">Southern</option>

                        </select>
                        @error('province')
                            <small>{{ $message }}</small>
                        @enderror


                        <label>Street Address</label>
                        <input type="text" name="streetAddress" placeholder="Street Address">

                        @error('streetAddress')
                            <small>{{ $message }}</small>
                        @enderror

                    </div>
                    <div class=" input-contact">
                        <label>Phone</label>
                        <input type="text" name="phone" placeholder="Phone">

                        @error('phone')
                            <small>{{ $message }}</small>
                        @enderror

                        <label>email</label>
                        <input type="email" name="email" placeholder="Email">

                        @error('email')
                            <small>{{ $message }}</small>
                        @enderror

                    </div>

                    <button type="submit">
                        Submit
                    </button>


                </form>
                message:
                @if (session('message'))
                    <small>

                        {{ session('message') }}
                    </small>
                @endif
            </div>
        </div>


        <div class="order-details-container">

            <h2 class="title">Your Order Details</h2>

            <div class="order-details-content">

                @if (session('cart'))
                    @foreach (session('cart') as $details)
                        <div class="order-items">

                            <div class="item-image">
                                <img src="{{ asset('UploadImgs/' . $details['image']) }}" alt="image">
                            </div>


                            <div class="item-name">
                                {{ $details['name'] }} x {{ $details['quantity'] }}
                            </div>

                            <div class="item-price">
                                Rs. {{ $details['price'] }}.00
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="details">
                    <div class="total-price">
                        <h3>Total Price</h3>

                        <h3>Rs.{{ $total_price }}.00</h3>
                    </div>
                </div>

            </div>

            <div class="payment-methods">
                <div class="method">
                    <input type="radio" name="paymentMethod" value="cashOnDelivery"> <label>Cash On Delivery</label>
                </div>

                <div class="method">
                    <input type="radio" name="paymentMethod" value="visaMasterCard"> <label>Master Card</label>
                </div>
            </div>

            <button>
                Place Order
            </button>
        </div>

    </div>
@endsection
