<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreActivityStuationRequest extends FormRequest
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
            'title'=>'required|string',
            'description'=>'required|string',
            'status'=>'required|string',
            //'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:6096|dimensions:width=370,height=370',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:6096',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'العنوان مطلوب',
            'description.required' => 'الشرح عن الموقف او النشاط مطلوب',
            'status.required' => 'اختر الموقف السياسي او النشاط',
            'image.dimensions' => 'يجب ان يكون قياس الصورة 370 *370',
        ];
    }
}
