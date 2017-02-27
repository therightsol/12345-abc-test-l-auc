<?php

namespace Modules\Users\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Users\Filters\QueryFilter;

class UserModel extends Model
{
    use softDeletes;
    protected $fillable = [];

    protected $table = 'users';

    public function scopeFilter($query, QueryFilter $filters)
    {
        return $filters->apply($query);
    }
}
