<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCateRequest extends FormRequest
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
            //
            'name'=>'unique:category,cate_name,'.$this->segment(4).',cate_id' //ràng buộc giá trị duy nhất của cột , loại trừ dữ liệu có giá trị "segment(4)" ở trường "cate_id" 
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Tên danh mục bị trùng!'
        ];
    }
}
