<?php

namespace Modules\Auctions\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Auctions\Entities\Auction;
use Modules\Auctions\Http\Filters\AuctionsFilter;
use Modules\Cars\Entities\Car;

class AuctionsController extends Controller
{
    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(AuctionsFilter $filter, Request $request)
    {
        $auctions = Auction::filter($filter)
            ->paginate(\Helper::limit($request));
        return view('auctions::index', compact('auctions'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $cars = Car::pluck('title', 'id');

        return view('auctions::create', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'car_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $sdate = explode('--', $request->input('start_date'));
        $edate = explode('--', $request->input('end_date'));

        $start_date = Carbon::createFromFormat('d F Y', trim($sdate[0]));
        $start_time = trim($sdate[1]);
        $end_date = Carbon::createFromFormat('d F Y', trim($edate[0]));
        $end_time = trim($edate[1]);



        $isSuccess = Auction::create([
            'car_id' => $request->input('car_id'),
            'bid_starting_amount' => $request->input('bid_starting_amount'),
            'start_date' => $start_date,
            'end_date' => $end_date,
            'start_time' => $start_time,
            'end_time' => $end_time
        ]);
        return ($isSuccess) ?
            back()->with('alert-success', 'Auction Created Successfully')
            : back()->with('alert-danger', 'Error: please try again.');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('auctions::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $auction = Auction::find($id);
        if(!$auction) return redirect()->route(Helper::route('index'));
        $cars = Car::pluck('title', 'id');

        return view('auctions::edit', compact('auction', 'cars'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'car_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        $sdate = explode('--', $request->input('start_date'));
        $edate = explode('--', $request->input('end_date'));

        $start_date = Carbon::createFromFormat('d F Y', trim($sdate[0]));
        $start_time = trim($sdate[1]);
        $end_date = Carbon::createFromFormat('d F Y', trim($edate[0]));
        $end_time = trim($edate[1]);

        if (!$auction = Auction::find($id)) return redirect()->route(Helper::route('index'));
        $isSuccess = $auction->update([
            'car_id' => $request->input('car_id'),
            'bid_starting_amount' => $request->input('bid_starting_amount'),
            'start_date' => $start_date,
            'end_date' => $end_date,
            'start_time' => $start_time,
            'end_time' => $end_time
        ]);
        return ($isSuccess) ?
            back()->with('alert-success', 'Auction Created Successfully')
            : back()->with('alert-danger', 'Error: please try again.');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy($id)
    {
        $rec = Auction::find($id);
        if(empty($rec)) return;
        return ($rec->forceDelete()) ? 'true' : 'false';
    }
}
