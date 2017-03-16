<?php

namespace App\Http\Controllers\Auction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Auctions\Entities\Auction;

class AuctionController extends Controller
{
    public function index(Request $request, Filters $filter)
    {

        $auctions = Auction::filter($filter)->get();

        return $auctions;
        $query = Auction::query();

        if($request->has('max-year')){

        }

        dd($request->all());

        return view('auction.index');
        return $request->all();
    }
}
