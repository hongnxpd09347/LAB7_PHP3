<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'masv' => ['required', 'regex:/^PS\d{5}/'],
            'hoten' => ['required', 'min:3', 'max:20'],
            'tuoi' => 'required | integer|min:16|max:100',
            'ngaysinh' => ['required', 'regex:/\d{1,2}\/\d{1,2}\/\d{4}/'],
            'cmnd' => 'digits_between:9,10',
            'email' => 'email|ends_with:@fpt.edu.vn'
        ];
    }
    function messages()
    {
        return [
            'masv.required' => 'Mã SV chưa nhập',
            'masv.regex' => 'Mã SV không đúng định dạng',
            'hoten.required' => 'Họ tên sao không nhập ta',
            'hoten.min' => 'Họ tên sao ngắn quá vậy',
            'hoten.max' => 'Họ tên quá dài bồ ơi'
        ];
    }
}
