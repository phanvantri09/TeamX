<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequestService extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_brand' => 'required',
            'content' => 'required',
            'name' => 'required',
            'price' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'id_brand.required' => 'Không để trống',
            'content.required' => 'Không để trống',
            'name.required' => 'Không để trống',
            'price.required' => 'Không để trống',
        ];
    }
}
