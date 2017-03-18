<?php

namespace App\Http\Controllers\Auction;


use App\QueryBuilder;

class Filters extends QueryBuilder
{
    /**
     * @param $order
     */
    public function order_by($order)
    {
        $this->builder->orderBy('bid_starting_amount', $order);
    }

    public function year($year)
    {
        $this->builder->whereHas('car', function($query)use($year){
            $query->where('manufacturing_year', 'like', $year);
        });
    }
    public function company($company)
    {
        $this->builder->whereHas('car.carModel.carCompany', function($query)use($company){
            $query->where('company_name', 'like', $company);
        });
    }
}