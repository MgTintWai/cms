<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => "အမည္ထည့္ပါ",
            'content.required' => "အနည္းဆံုးစာသားတစ္လံုးါရမည္",
            'image.required' => "ပံုကိုထည္ါေပးပါ"
        ];
    }
}
