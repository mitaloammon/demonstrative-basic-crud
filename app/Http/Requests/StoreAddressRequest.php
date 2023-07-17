<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
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
            'address' => 'string|required|max:100',
            'city' => 'string|required|max:100',
            'uf' => 'string|required|max:100',
            'country' => 'string|required|max:100',
        ];
    }
    public function messages()
    {
        return [
            'addresses.id' => 'required',
        ];
    }
}
