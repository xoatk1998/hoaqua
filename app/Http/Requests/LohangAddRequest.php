<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LohangAddRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'txtLHSignt'  => 'required|unique:lohang,lohang_ky_hieu|size:5',
            'txtLHShelf' => 'required|integer',
            'txtLHQuant'  => 'required|integer',
            'txtLHBuyPrice'  => 'required',
            'txtLHSalePrice' => 'required',
        ];
    }

    public function messages() {
        return [
            'required'   => '<div><strong  style="color: red;">Vui lòng không để trống trường này!</strong></div>',
            'unique'     => '<div><strong  style="color: red;">Dữ liệu này đã tồn tại!</strong></div>',
            'txtLHSignt.size'   => '<div><strong  style="color: red;">Độ dài dữ liệu trường này là 5!</strong></div>',
            'integer'   => '<div><strong  style="color: red;">Kiểu dữ liệu không phù hợp!</strong></div>'
        ];
    }
}
