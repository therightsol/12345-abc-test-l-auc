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
            ['car.engineType', 'car.meta' => function($query){
                $query->where('meta_key', 'picture');
            }])
            ->where('end_date', '>=', date('Y-m-d'))
            ->latest()
            ->paginate(\Helper::limit($request));

        $auctionFilter = Auction::with(['car.engineType', 'car.carModel.carCompany'])
            ->where('end_date', '>=', date('Y-m-d'))
            ->get();
        return view('auction.index', $this->getFields($auctionFilter))->withAuctions($auctions)->withInput($request->all());
    }

    public function show($id)
    {
        $auction = Auction::whereId($id)->with(['bidding','car.engineType', 'car.carModel.carCompany','car.features'])
            ->where('end_date', '>=', date('Y-m-d'))
            ->firstOrFail();

        return view('auction.show', compact('auction'));
    }

    /**
     * @param $auctionFilter
     * @return array
     */
    public function getFields($auctionFilter)
    {

        return array(
            'manufacturing_years' => $auctionFilter->sortByDesc('car.manufacturing_year')->pluck('car.manufacturing_year', 'car.manufacturing_year')->unique(),
            'body_types' => $auctionFilter->sortByDesc('car.body_type')->pluck('car.body_type', 'car.body_type')->unique(),
            'kilometers' => $auctionFilter->sortByDesc('car.kilometers')->pluck('car.kilometers', 'car.kilometers')->unique(),
            'city_of_registration' =>$auctionFilter->sortByDesc('car.city_of_registration')->pluck('car.city_of_registration', 'car.city_of_registration')->unique(),
            'bid_starting_amounts' => $auctionFilter->sortByDesc('bid_starting_amount')->pluck('bid_starting_amount', 'bid_starting_amount')->unique(),
            'models' =>$auctionFilter->sortByDesc('car.carModel.model_name')->pluck('car.carModel.model_name', 'car.carModel.model_name')->unique(),
            'companies' => $auctionFilter->sortByDesc('car.carModel.carCompany.company_name')->pluck('car.carModel.carCompany.company_name', 'car.carModel.carCompany.company_name')->unique());
    }

}
