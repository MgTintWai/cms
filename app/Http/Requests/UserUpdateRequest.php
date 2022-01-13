<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name' => 'required|min:1',
            'email' => 'required|min:1',
            'password' => 'required|min:1',
            'about' => 'required|min:1',
            // 'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "အမည္ထည့္ပါ",
            'email.required' => "Enter Your Real Email",
            'password.required' => "Enter Your Password",
            'about.required' => "အနည်းဆုံးဆယ်လုံးထည့်ရမည်",
            // 'profile_image.required' => "လိုအပ်တဲ့ ပုံထည့်ပါ",
        ];
    }
}
