<?php

namespace Modules\EngineTypes\Entities;

use Illuminate\Database\Eloquent\Model;

class EngineTypeModel extends Model
{
    protected $fillable = ['title'];

    protected $table = 'engine_types';

    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}
