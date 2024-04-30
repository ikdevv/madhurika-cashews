<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $users = User::all();
        return view('Admin.Dashboard.dashboard', compact('products', 'users'));
    }
}
