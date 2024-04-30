<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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

            'name' => [
                'required',
                'string'
            ],

            'flavor' => [
                'required',
                'string'
            ],

            'packettype' => [
                'required',
                'string'
            ],

            'description' => [
                'required',
                'string'
            ],


            'weight' => [
                'required',
                'integer'
            ],


            'price' => [
                'required',
                'string'
            ],


            'quantity' => [
                'required',
                'integer'
            ],

            'image' => [
                'required',
                'mimes:png,jpg',
            ]

        ];
    }
}
