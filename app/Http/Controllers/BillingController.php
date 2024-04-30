<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillingRequest;
use App\Models\Billing;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function store(BillingRequest $request)
    {

        $validatedData = $request->validated();

        $billing = new Billing;

        $billing->firstName  = $validatedData['firstName'];
        $billing->lastName  = $validatedData['lastName'];
        $billing->province = $validatedData['province'];
        $billing->streetAddress = $validatedData['streetAddress'];
        $billing->phone = $validatedData['phone'];
        $billing->email = $validatedData['email'];


        $billing->save();

        dd($billing);
    }
}
