@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Product</h1>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <form action="{{ url('admin/editproduct/' . $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" name="description" class="form-control"
                                value="{{ $product->description }}">
                            @error('weight')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Weight</label>
                            <input type="text" name="weight" class="form-control" value="{{ $product->weight }}">
                            @error('weight')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                            @error('price')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="col-md-4 mb-3">
                            <label class="form-label">Quantity</label>
                            <input type="number" name="quantity" class="form-control" value="{{ $product->quantity }}">
                            @error('quantity')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Upload Image </label>
                            <input type="file" name="image" class="form-control">
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                            <img src="{{ asset('UploadImgs/' . $product->image) }}" width="50"
                                alt="{{ $product->image }}" class="pt-4">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>


                @if (session('message'))
                    <small class="alert alert-success mx-3">{{ session('message') }} <a
                            href="{{ url('admin/viewproducts') }}" class="btn btn-primary btn-sm float-end"> <i
                                class="fa-solid fa-eye pe-3"></i>See Products</a></small>
                @endif

            </div>
        </form>
    </div>
@endsection
