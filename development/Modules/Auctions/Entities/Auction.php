<?php

namespace Modules\Auctions\Entities;

use Carbon\Carbon;
use Illuminate\Foundation\Auth\User;
use Modules\Biddings\Entities\Bidding;
use Modules\Cars\Entities\Car;
use Modules\CommonBackend\Entities\BaseModel;
use Modules\Users\Entities\UserModel;

class   Auction extends BaseModel
{
    protected $fillable = ['bid_starting_amount','car_id', 'average_bit', 'start_date', 'end_date','start_time', 'end_time','winner_user_id', 'is_notify', 'is_paid'];


    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function bidding()
    {
        return $this->hasMany(Bidding::class);
    }

    public function winnerUser()
    {
        return $this->belongsTo(UserModel::class, 'winner_user_id');
    }

    public function isActive()
    {
        return $this->end_date > Carbon::now() and !$this->winner_user_id;
    }

    protected $dates = [
        'start_date',
        'end_date'
    ];

}
