<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'title'       => 'required|max:255',
            'price'       => 'required|numeric',
            'list_price'  => 'required|numeric',
            //'image'       => 'mimes:jpg,jpeg,bmp,png|max:20000',
            'is_featured' => 'required|in:true,false',
            'rating'      => 'required|numeric'
        ];
    }
}
