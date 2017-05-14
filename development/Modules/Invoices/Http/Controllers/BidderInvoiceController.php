<?php

namespace Modules\Invoices\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Biddings\Entities\Bidding;
use Stripe\Charge;
use Stripe\Error\Card;
use Stripe\Stripe;

class BidderInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Response
     * @internal param Bidding $bidding
     * @internal param Auction $auction
     */
    public function index(Request $request)
    {
        $bidding = Bidding::whereId($request->id)->with('auction.car')->firstOrFail();
        return view('invoices::index', compact('bidding'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('invoices::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('invoices::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $bidding = Bidding::whereId($id)->with('auction.car')->firstOrFail();
        return view('invoices::edit',compact('bidding'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $bidding = Bidding::whereId($id)->with('auction.car')->firstOrFail();
        $token = $request->input('stripeToken');

        Stripe::setApiKey(env('STRIPE_SECRET'));
//        return env('STRIPE_SECRET');
        try {
            $customer = Charge::create([
                "amount" => $bidding->bid_amount,
                "currency" => "usd",
                'source' => $token,
                "description" => "Charge for mason.taylor@example.com"
            ]);
        } catch (Card $e) {
            return redirect()->back()
                ->withErrors($e->getMessage())
                ->withInput();
        }

        $bidding->auction()->update([
           'is_paid' => 1
        ]);

        return back()->with('alert-success', 'Paid Successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
