<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProdutoRequest extends FormRequest
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
            'name' => 'required|unique:produtos|max:255',
            'image' => 'max:255',
            'desc' => 'required|max:255',
            'price' => 'required|max:255',
            'discount' => 'max:255',
            'stock' => 'max:255'
        ];
    }
}
