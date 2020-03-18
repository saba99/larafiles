<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
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
            'package_title' => 'required',

            'package_price' => 'required|numeric',

            'categories'=>'required|min:1'

          ];
    }
    public function messages()
    {
        return [
            'package_title.required' => 'لطفا عنوان پکیج را وارد نمایید',
            'package_price.required' => 'لطفا قیمت پکیج  را وارد نمایید',
            'package_price.numeric' => 'قیمت پکیج باید عددی باشد ',
            'categories.required'=>'لطفا دسته بندی را انتخاب کنید',
            'categories.min'=>'حداقل یک دسته بندی را وارد کنید ',

        ];
    }
}
