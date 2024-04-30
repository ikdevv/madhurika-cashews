<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function render()
    {
        $products = Product::all();
        return view('frontend.products', compact('products'));
    }

    public function renderDetailsView($product_id)
    {
        $productDetails = Product::findOrFail($product_id);
        return view('frontend.productDetails', compact('productDetails'));
    }


    public function addToCart($product_id)
    {
        $product = Product::findOrFail($product_id);

        $cart = session()->get('cart', []);

        if (isset($cart[$product_id])) {
            $cart[$product_id]['quantity']++;
        } else {
            $cart[$product_id] = [

                "id" => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "weight" => $product->weight,
                "price" => $product->price,
                "image" => $product->image,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }



    public function renderCheckoutCart()
    {
        $cart = session()->get('cart');

        if (!$cart) {
            return redirect()->route('cart');
        }

        $total_price = 0;
        foreach ($cart as $item) {
            $total_price += $item['price'] * $item['quantity'];
        }

        return view('frontend.checkout', [
            'cart' => $cart,
            'total_price' => $total_price,
        ]);
    }


    public function BuyNow()
    {
    }
}
