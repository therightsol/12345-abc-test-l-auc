<?php

namespace App\Http\Controllers\Auction;

use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Auctions\Entities\Auction;
use Modules\Biddings\Entities\Bidding;
use Modules\Cars\Entities\Car;
use Modules\GeneralSettings\Entities\GeneralSetting;

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
        $auction = Auction::whereId($id)->with(['bidding.user','car.engineType', 'car.carModel.carCompany','car.features'])
            ->where('end_date', '>=', date('Y-m-d'))
            ->firstOrFail();


        \Session::put('currentAuction', $auction);
        $can = false;
        if(\Auth::check()){
            $maxBids = GeneralSetting::where('key', 'max_allowed_bits')->first();
            if (!$maxBids){
                $can = true;
            }else{
                $can = $auction->bidding->where('user_id', \Auth::user()->id)->count() < $maxBids->value;
            }
        }
        return view('auction.show', compact('auction','can'));
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

    public function addBid(Request $request)
    {
        $this->validate($request, [
            'bid_amount' => 'required|numeric',
        ]);

        $isSuccess = Bidding::create([
            'bid_amount' => $request->bid_amount,
            'user_id' => \Auth::user()->id,
            'auction_id' => \Session::get('currentAuction')->id
        ]);
        return ($isSuccess) ?
            back()->with('alert-success', 'Bid Successfully')
            : back()->with('alert-danger', 'Error: please try again.');
    }
}
