<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'firstName' => [
                'required',
                'string'
            ],

            'LastName' => [
                'required',
                'string'
            ],

            'province' => [
                'required',
                'string'
            ],

            'streetAddress' => [
                'required',
                'string'
            ],

            'phone' => [
                'required',
                'string'
            ],

            'email' => [
                'required',
                'email'
            ]

        ];
    }
}
