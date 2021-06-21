<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStepThreeRequest extends FormRequest
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
            'product_id' => 'required|numeric',
            'world_wide' => 'boolean|nullable',
            'usa'        => 'boolean|nullable',
            'package_details' => 'string|max:255',
            'service_usa' => 'nullable|string|max:255',
            'price_usa' => 'nullable|numeric',
            'service_world_wide' => 'nullable|string|max:255',
            'price_world_wide' => 'nullable|numeric',
            'height'    =>'nullable|string|max:100',
            'weight'    =>'nullable|numeric|max:100',
            'width'     =>'nullable|string|max:100',
            'length'    => 'nullable|string|max:100',
        ];
    }
}
