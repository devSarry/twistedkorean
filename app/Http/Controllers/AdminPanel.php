<?php

namespace App\Http\Controllers;

use App\CouponList;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminPanel extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $signedUpUsers = CouponList::all();

        return view('admin.index')->with(['signedUpUsers' => $signedUpUsers]);

    }

    public function emails()
    {
        return $signedUpUsers = CouponList::all('email');
    }
}
