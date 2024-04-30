@extends('layouts.admin')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

                {{-- cards --}}
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card radius-10 border-start border-0 border-4 border-success mb-4"
                            style="background-color: #d3d3d3;">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Total Revenue</p>
                                        <h4 class="my-1 text-success">Rs.20000.00</h4>
                                        <p class="mb-0 font-13">+5000 from last week</p>
                                    </div>
                                    <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-md-6">
                        <div class="card radius-10 border-start border-0 border-4 border-success mb-4"
                            style="background-color: #d3d3d3;">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Products</p>
                                        <h4 class="my-1 text-success">50</h4>
                                        <p class="mb-0 font-13">+8 from last week</p>
                                    </div>
                                    <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-md-6">
                        <div class="card radius-10 border-start border-0 border-4 border-success mb-4"
                            style="background-color: #d3d3d3;">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary">Users</p>
                                        <h4 class="my-1 text-success">150</h4>
                                        <p class="mb-0 font-13">+8 from last week</p>
                                    </div>
                                    <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Products

                        <a href="{{ url('admin/viewproducts') }}" class="btn btn-primary btn-sm float-end"> <i
                                class="fa-solid fa-eye pe-3"></i>See More Products</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Product Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Weight</th>
                                    <th>Stock Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($products as $product)
                                    <tr>
                                        <td><img src="{{ asset('UploadImgs/' . $product->image) }}" height="50"
                                                width="50" style="margin-right:20px">{{ $product->image }}
                                        </td>

                                        <td>{{ $product->name }}</td>
                                        <td>Rs.{{ $product->price }}.00</td>
                                        <td>{{ $product->weight }}g</td>

                                        @if ($product->quantity == 0)
                                            <td><i class="fa-regular fa-circle-xmark"
                                                    style="color: red; padding-right:10px;"></i>Out of Stock</td>
                                        @else
                                            <td><i class="fa-regular fa-circle-check"
                                                    style="color: green; padding-right:10px;"></i>In Stock
                                            </td>
                                        @endif
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="">No products found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Users

                        <a href="{{ url('admin/viewusers') }}" class="btn btn-primary btn-sm float-end"> <i
                                class="fa-solid fa-eye pe-3"></i>See User Details</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Active Status</th>
                                </tr>
                            </thead>

                            <tbody>

                                @forelse ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>

                                        @if ($user->role == true)
                                            <td>Admin</td>
                                        @elseif ($user->role == false)
                                            <td>Normal User</td>
                                        @endif

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="">No Users found</td>
                                    </tr>
                                @endforelse

                            </tbody>

                        </table>
                    </div>
                </div>



            </div>
        </main>
    </div>
@endsection
