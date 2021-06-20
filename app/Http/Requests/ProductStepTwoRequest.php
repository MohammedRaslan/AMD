<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStepTwoRequest extends FormRequest
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
            'id' => 'required|numeric',
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
