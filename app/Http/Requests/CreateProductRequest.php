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
            'type'  => 'required|max:200',
            'description' => 'required|string:255',
            'condition' => 'required|string|max:200',
            'brand' => 'required|string|max:200',
            'return_policy' => 'required|string',
            'minimum_offer' => 'nullable|numeric',
            'best_offer' => 'required|boolean',
            'draft' => 'required|boolean',
            'price' => 'required|numeric',
            'doll_size' => 'nullable|string|max:255',
            'quantity' => 'nullable|numeric',
            'doll_gender' => 'nullable|string',
            'modified_item' => 'boolean',
            'domestic_product' => 'boolean',
            'featured_refinements' => 'nullable|string',
            'details' => 'nullable|string',
        ];
    }
}
