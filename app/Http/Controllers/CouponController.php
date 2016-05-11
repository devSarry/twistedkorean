<?php

namespace App\Http\Controllers;

use App\CouponList;
use Illuminate\Http\Request;

use App\Http\Requests;

class CouponController extends Controller
{

    public function storeEmails(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required|unique:coupon_lists',
        ]);
        $coupon = new CouponList;

        $coupon->name = $request->name;
        $coupon->email = $request->email;

        $coupon->save();

        return redirect()->back();
    }
}
