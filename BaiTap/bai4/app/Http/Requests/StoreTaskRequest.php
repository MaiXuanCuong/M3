<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'content' => 'required|min:3',
            'image' => 'nullable|image:jpeg,png,jpg',
            'due_date' => 'required|date'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Tiêu đề là bắt buộc',
            'title.min' => 'Tiêu đề có ít nhất 3 ký tự',
            'content.required' => 'Nội dung là bắt buộc',
            'content.min' => 'Nội dung có ít nhất 3 ký tự',
            'image.image' => 'Ảnh không đúng định dạng: jpeg,png,jpg',
            'due_date.required' => 'Ngày hết hạn là bắt buộc',
            'due_date.date'     => 'Sai định dạng ngày thàng'
        ];
    }
}