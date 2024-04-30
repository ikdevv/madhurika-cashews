<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function renderAboutUs()
    {
        return view('frontend.aboutUs');
    }
    public function rendercontactUs()
    {
        return view('frontend.contactUs');
    }
    public function renderCart()
    {
        return view('frontend.cart');
    }
}
