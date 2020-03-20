<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            

            'email' => 'required|email|unique:users',

            'password' => 'required|min:6|max:10',

        ];
    }
    public function messages()
    {
        return [
            
            'email.required' => 'لطفا ایمیل را وارد کنید',
            'email.email' => 'ایمیل شما معتبر نیست',
            'email.unique' => 'ایمیل وارد شده تکراری است',

            'password.required' => 'لطفا رمز عبور را وارد کنید',
            'password.min' => 'رمز عبور شما باید بیش از ۶ کاراکتر باشد',
            'password.max' => 'رمز عبور باید حداکثر ده کاراکتر باشد ',

        ];
    }
}
