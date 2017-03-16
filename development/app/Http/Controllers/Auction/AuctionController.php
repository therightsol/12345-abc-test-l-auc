<?php

namespace App\Http\Controllers\Auction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuctionController extends Controller
{
    public function index(Request $request)
    {

        return view('auction.index');
        return $request->all();
    }
}
