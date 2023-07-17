<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'string|required|max:100',
            'price' => 'string|required|max:100',
            'category' => 'string|required|max:100',
            'description' => 'string|required|max:100',
            'image' => 'string|required|max:100'
        ];
    }

    public function messages()
    {
        return [
            'products_list.id' => 'required',
        ];
    }
}
