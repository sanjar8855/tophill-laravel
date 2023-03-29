<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandsRequest extends FormRequest
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
            'name' => 'required|min:1|max:100',
            'photo' => 'required|min:5|max:200',
//            'description' => 'required|min:5|max:50',
//            'status' => 'required|min:5|max:50',
        ];
    }

    public function attributes(){
        return [
            'name' => 'Brand nomi',
            'photo' => 'Brand rasmi',
            'description' => 'Brandga izoh',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Brand nomi majburiy',
            'photo.required' => 'Brand rasmi majburiy',
        ];
    }
}
