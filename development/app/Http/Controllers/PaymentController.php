<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PaymentController extends Controller
{
    public function index()
    {
        return view('payment.index');
    }

    public function store(Request $request)
    {

    }
}
