<div>
    @extends('layouts.admin')

    @section('content')
        <div class="container-fluid px-4">
            <h1 class="mt-4">View Products</h1>
            <ol class="breadcrumb mb-4">

                <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <div class="card">
                <div class="card-body">

                    <table class="table table-bordered table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Weight</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td><img src="{{ asset('UploadImgs/' . $product->image) }}" height="50" width="50"
                                            style="margin-right:20px">{{ $product->image }}
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->weight }}</td>
                                    <td>{{ $product->quantity }}</td>

                                    @if ($product->quantity == 0)
                                        <td><i class="fa-regular fa-circle-xmark"
                                                style="color: red; padding-right:10px;"></i>Out of Stock</td>
                                    @else
                                        <td><i class="fa-regular fa-circle-check"
                                                style="color: green; padding-right:10px;"></i>In Stock
                                        </td>
                                    @endif

                                    <td>
                                        <a href="{{ url('admin/editproduct/' . $product->id) }}"
                                            class="btn btn-success btn-sm">Edit</a>

                                        <a href="{{ url('admin/products/' . $product->id . '/delete') }}"
                                            onclick="return confirm('Are You Sure You want to delete this Product')"
                                            class="btn btn-sm btn-secondary">Delete</a>
                                    </td>
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
        </div>
    @endsection
</div>
