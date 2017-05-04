<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auction\AuctionController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Auctions\Entities\Auction;
use Modules\Cars\Entities\Car;
use Modules\Media\Entities\Post;
use Modules\Users\Entities\UserModel;

class HomeController extends Controller
{
    public function index()
    {

        $auctions = Auction::with(['car.engineType', 'car.carModel.carCompany', 'car.meta' => function($query){
            $query->where('meta_key', 'picture');
        }])
            ->where('end_date', '>=', date('Y-m-d'))
            ->latest()->get();

        $totalAuctions = $auctions->count();
        $totalUsers = UserModel::count();
        $totalCars = Car::count();

//        return $totalCars;

        return view('home.index',
            (new AuctionController())->getFields($auctions))
            ->withAuctions($auctions)->with(['totalCars' => $totalCars, 'totalAuctions' => $totalAuctions, 'totalUsers' => $totalUsers]);

    }
}
