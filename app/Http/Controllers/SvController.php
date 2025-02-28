<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RuleNhapSV;

class SvController extends Controller
{
    public function sv()
    {
        return view("nhapsv");
    }
    function sv_store(RuleNhapSV $request)
    {
        echo "Code xử lý lưu thông tin sinh viên";

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
