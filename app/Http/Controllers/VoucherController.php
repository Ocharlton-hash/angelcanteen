<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function Voucher()
    {
        return view('admin.voucher');
    }
}
