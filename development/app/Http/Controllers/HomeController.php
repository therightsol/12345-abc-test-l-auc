<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Auctions\Entities\Auction;

class HomeController extends Controller
{
    public function index()
    {
        $listings = Auction::with(['car.meta' => function($q){
            $q->where('meta_key', 'picture');
        }])->limit(20)->latest()->get();

//        return $listings;
        return view('home.index', compact('listings'));
    }
}
