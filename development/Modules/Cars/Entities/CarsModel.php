<?php

namespace Modules\Cars\Entities;

use Illuminate\Database\Eloquent\Model;

class CarsModel extends Model
{
    protected $fillable = ['title', 'average_price','manufacturing_year','model'];

    protected $table = 'cars';

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }

}
