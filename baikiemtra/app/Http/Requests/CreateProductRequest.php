<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
      $year =  date("Y");
        $rules =[
            'name' => 'required',
            'ISBN' => 'required|numeric|min:20',
            'author_id' => 'required',
            'category_id' => 'required',
            'pages' => 'required|numeric',
            'years' => 'required|numeric|max:'.$year,
        ];
        return $rules;
    }
    public function messages(){
        $messages =[
            'name.required' => 'Hãy Nhập Tên Sản Phẩm',
            'ISBN.required' => 'Hãy Nhập Mã ISBN',
            'ISBN.numeric' => 'Hãy Nhập Số',
            'ISBN.min' => 'Hãy Nhập Lớn 19 Chữ SỐ',
            'author_id.required' => 'Hãy Chọn Tên Tác Giả',
            'category_id.required' => 'Hãy Chọn Tên Thể Loại',
            'pages.required' => 'Hãy Nhập Số Trang',
            'pages.numeric' => 'Hãy Nhập Số',
            'years.required' => 'Hãy Nhập Năm Xuất Bản',
            'years.numeric' => 'Hãy Nhập Số',
            'years.max' => 'Hãy Nhập Nhỏ Hơn Hoặc Bằng Năm Hiện Tại',
        ];
        return $messages;
}
}