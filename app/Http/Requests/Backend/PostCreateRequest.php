<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
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
            'title'=>'required|min:10',
            'description'=>'required',
            'slug'=>'unique:posts',
            'file'=>'required',
            'status'=>'required',
        ];
    } 

    public function messages()
    {
        return [
            'title.required'=>'لطفا عنوان مطلب را وارد کنید ',
            'slug.unique'=>'این نام مستعار قبلا ثبت شده است ',
            'title.min'=>'عنوان مطلب باید حداقل ده کاراکتر باشد ',
            'description.required'=>'وارد کردن توضیحات ضروری است ',
            'file.required'=>'انتخاب تصویر ضروری است ',
            'status.required'=>'وضعیت مطلب را مشخص کنید '


        ];
    }
}
