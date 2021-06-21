<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'sku' => 'string|max:200',
            'title' => 'required|string|max:200',
            'type'  => 'required|string|max:200',
            'description' => 'required|string:255',
            'details' => 'nullable|string|max:255',
            'condition' => 'required|string|max:200',
            'brand' => 'required|string|max:200',
            'return_policy' => 'required|boolean',
            'best_offer' => 'required|boolean',
            'draft' => 'required|boolean',
            'price' => 'required|numeric'
        ];
    }
}
