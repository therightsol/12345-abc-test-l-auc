<?php

namespace Modules\Biddings\Entities;

use Illuminate\Database\Eloquent\Model;

class Bidding extends Model
{
    protected $fillable = ['bid_amount', 'user_id', 'auction_id'];

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}
