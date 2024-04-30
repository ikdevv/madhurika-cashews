<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function renderView()
    {

        $products = Product::all();
        return view('Admin.Product.viewProduct', compact('products'));
    }

    public function renderAdd()
    {

        return view('Admin.Product.addProduct');
    }

    public function renderEdit($id)
    {
        $product = Product::find($id);
        return view('Admin.Product.editProduct', compact('product'));
    }

    public function storeProduct(ProductRequest $request)
    {

        $validatedData = $request->validated();

        $product = new Product;

        $product->name = $validatedData['name'];
        $product->flavor = $validatedData['flavor'];
        $product->description = $validatedData['description'];
        $product->weight = $validatedData['weight'];
        $product->price = $validatedData['price'];
        $product->quantity = $validatedData['quantity'];
        $product->packettype = $validatedData['packettype'];


        $filename = '';

        if ($request->hasFile('image')) {

            $filename = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('UploadImgs'), $filename);
        }

        $product->image = $filename;

        $product->save();

        return redirect('/admin/addproduct')->with('message', 'Product Added Successfully');
    }

    public function updateProduct(ProductRequest $request, $id)
    {
        $validatedData = $request->validated();

        $product = Product::findOrFail($id);

        $product->name = $validatedData['name'];
        $product->flavor = $validatedData['flavor'];
        $product->weight = $validatedData['weight'];
        $product->price = $validatedData['price'];
        $product->quantity = $validatedData['quantity'];
        $product->packettype = $validatedData['packettype'];


        if ($request->hasFile('image')) {

            $path = public_path('UploadImgs/' . $product->image);

            if (File::exists($path)) {

                File::delete($path);
            }


            $filename = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('UploadImgs'), $filename);
            $product->image = $filename;
        }



        $product->update();

        return redirect('/admin/addproduct')->with('message', 'Product Updated Successfully');
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);

        // Check if the product has an image and delete it
        $path = public_path('UploadImgs/' . $product->image);
        if (File::exists($path)) {
            File::delete($path);
        }

        $product->delete();

        return redirect('/admin/viewproducts');
    }
}
