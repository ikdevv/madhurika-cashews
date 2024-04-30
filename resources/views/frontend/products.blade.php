@extends('landing')


@section('frontEndContent')
    <link rel="stylesheet" href="{{ asset('Libraries/FontAwesome/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Frontend/Styles/Products/products.css') }}">

    <div class="product-page-container">

        <div class="top-menu-container">

            <div class="top-menu-titie">
                <h2>All Products</h2>
            </div>

            <div class="view-icons">
                <i class="fa-solid fa-list"></i>
                <i class="fa-solid fa-grip"></i>
            </div>

            <div class="sorting-menu">

                <select name="" id="">
                    <option value="">Default Sorting</option>
                    <option value="">Sort By: Price Low to High</option>
                    <option value="">Sort By: Price High to Low</option>
                </select>

            </div>


        </div>


        <aside class="sidebar-container">

            <div class="sidebar-items">
                <div class="sidebar-title">
                    <h3>Filter By Price</h3>
                </div>

                <div class="sidebar-sub-items">
                    <div class="item">
                        <input type="checkbox" value="1" class="price-filter">
                        <label>Rs.0 - Rs.1000</label>
                    </div>

                    <div class="item">
                        <input type="checkbox" value="2" class="price-filter">
                        <label>Rs.1000 - Rs.2000</label>
                    </div>

                    <div class="item">
                        <input type="checkbox" value="3" class="price-filter">
                        <label>Rs.2000 - Rs.3000</label>
                    </div>

                    <div class="item">
                        <input type="checkbox" value="4" class="price-filter">
                        <label>Rs.3000 - Rs.4000</label>
                    </div>
                </div>
            </div>

            <div class="sidebar-items">
                <div class="sidebar-title">
                    <h3>Filter By Flavor</h3>
                </div>

                <div class="sidebar-sub-items" id="flavorFilter">

                    <div class="item">
                        <input type="checkbox" value="Dehydrated">
                        <label>Dehydrated</label>
                    </div>

                    <div class="item">
                        <input type="checkbox" value="Cheese">
                        <label>Cheese</label>
                    </div>

                    <div class="item">
                        <input type="checkbox" value="Spicy">
                        <label>Spicy</label>
                    </div>

                    <div class="item">
                        <input type="checkbox" value="Salted">
                        <label>Salted</label>
                    </div>
                </div>

                <div class="sidebar-items">
                    <div class="sidebar-title">
                        <h3>Filter By Packet Size</h3>
                    </div>

                    <div class="sidebar-sub-items">

                        <div class="item">
                            <div class="item">
                                <input type="checkbox">
                                <label>100g</label>
                            </div>

                            <div class="item">
                                <input type="checkbox">
                                <label>200g</label>
                            </div>

                            <div class="item">
                                <input type="checkbox">
                                <label>500g</label>
                            </div>

                            <div class="item">
                                <input type="checkbox">
                                <label>1000g (1kg)</label>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-items">
                        <div class="sidebar-title">
                            <h3>Filter By Package</h3>
                        </div>

                        <div class="sidebar-sub-items">

                            <div class="item">
                                <input type="checkbox">
                                <label>Gift Pack</label>
                            </div>

                            <div class="item">
                                <input type="checkbox">
                                <label>Individual</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <div class="product-container">

            <div class="product-card-container">
                @forelse ($products as $product)
                    <a href="{{ url('products/' . $product->id) }}">
                        <div class="product-card">

                            <div class="product-status">

                                @if ($product->quantity == 0)
                                    <p style="background-color: red">Out Of Stock</p>
                                @else
                                    <p style="background-color: green">In Stock</p>
                                @endif
                            </div>


                            <div class="product-card-image">
                                <img src="{{ asset('UploadImgs/' . $product->image) }}" alt="img">
                            </div>

                            <div class="product-card-title">
                                <p>{{ $product->name }} {{ $product->weight }}g</p>
                            </div>

                            <div class="product-card-description">
                                <p>{{ $product->flavor }}/{{ $product->packettype }}/{{ $product->description }}</p>
                            </div>

                            <div class="product-price">
                                <h4> Rs.<span id="product-card-price">{{ $product->price }}</span>.00 </h4>
                            </div>

                            <div class="add-to-cart-button">
                                <a href="{{ route('add-to-cart', $product->id) }}">
                                    <button>Add To Cart</button>
                                </a>
                            </div>

                        </div>
                    </a>
                @empty
                    products not found
                @endforelse

            </div>

        </div>

    </div>

    <script src="{{ asset('Libraries/FontAwesome/fontawesome.min.js') }}"></script>
    <script src="{{ asset('Frontend/Scripts/Products/products.js') }}"></script>
@endsection
