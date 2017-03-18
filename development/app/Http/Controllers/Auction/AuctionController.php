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
        $auctions = Auction::filter($filter)->with(
            ['car.engineType'])
            ->get();
//        return $request->all();

        $manufacturing_years = $auctions->sortByDesc('car.manufacturing_year')->pluck('car.manufacturing_year','car.manufacturing_year')->unique();
        $body_types = $auctions->sortByDesc('car.body_type')->pluck('car.body_type','car.body_type')->unique();
        $kilometers = $auctions->sortByDesc('car.kilometers')->pluck('car.kilometers','car.kilometers')->unique();
        $city_of_registration = $auctions->sortByDesc('car.city_of_registration')->pluck('car.city_of_registration','car.city_of_registration')->unique();
        $bid_starting_amounts = $auctions->sortByDesc('bid_starting_amount')->pluck('bid_starting_amount','bid_starting_amount')->unique();
//        return $auctions;
        $models = $auctions->sortByDesc('car.carModel.model_name')->pluck('car.carModel.model_name','car.carModel.model_name')->unique();
        
        $companies = $auctions->sortByDesc('car.carModel.carCompany.company_name')->pluck('car.carModel.carCompany.company_name','car.carModel.carCompany.company_name')->unique();
        
        return view('auction.index',
            compact('auctions','manufacturing_years', 'models', 'companies',
            'bid_starting_amounts','city_of_registration','kilometers','body_types'))->withInput($request->all());
    }
}
