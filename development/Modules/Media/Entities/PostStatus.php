<?php

namespace Modules\Media\Entities;

use Illuminate\Database\Eloquent\Model;

class PostStatus extends Model
{
    //
    public function getForeignKey()
    {
        return 'status';
    }

    public function post(){
        return $this->belongsTo('App\Post');
    }
}
