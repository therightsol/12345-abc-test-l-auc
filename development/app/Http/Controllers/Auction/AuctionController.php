<?php

namespace App\Http\Controllers\Auction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Auctions\Entities\Auction;
use Modules\Cars\Entities\Car;

class AuctionController extends Controller
{
    public function index(Request $request, Filters $filter)
    {
        
        $auctions = Auction::filter($filter)->with('car.carModel.carCompany')
            ->get();

        $manufacturing_years = $auctions->sortByDesc('car.manufacturing_year')->pluck('car.manufacturing_year')->unique();
//        return $auctions;
        $models = $auctions->sortByDesc('car.carModel.model_name')->pluck('car.carModel.model_name')->unique();
        
        $companies = $auctions->sortByDesc('car.carModel.carCompany.company_name')->pluck('car.carModel.carCompany.company_name')->unique();
        
        return view('auction.index', compact('manufacturing_years', 'models', 'companies'));
        return $request->all();
    }
}
