<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
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
            'plan_title' => 'required',

            'plan_limit_download_count' => 'required|numeric',

            
            'plan_price'=>'required|numeric',
            'plans_days_count'=>'required|numeric',
        ];
    }
    public function messages()
    {
        return [
            'plan_title.required' => 'لطفا عنوان طرح را وارد نمایید',
            'plan_limit_download_count.required' => 'لطفا تعداد  محدودیت دانلود را وارد نمایید',
            'plan_limit_download_count.numeric' => 'محدودیت دانلود باید عددی باشد',
            'plan_price.required' => 'لطفا قیمت را وارد کنید',

            'plan_price.numeric' => 'قیمت باید به صورت عددی باشد ',
            'plans_days_count.required' => 'تعداد روز های طرح را وارد کنید ',
            'plans_days_count.numeric' => 'تعداد روز های طرح باید به صورت عددی باشد  ',

        ];
    }
}
