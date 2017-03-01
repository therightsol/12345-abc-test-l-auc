<?php

namespace Modules\Media\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //



    protected $fillable = ['title','short_description','content','post_type','slug','parent_id','status','user_id', 'images', 'featured_image'];


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function post_status(){
        return $this->hasOne('App\Post_Status');
    }


    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function get_comment(){
        //@ todo: es ko set krna hai k sirf number of comments mily
        return $this->hasMany('App\Comment');
    }

    public function post_categories(){
        return $this->belongsToMany(Category::class, 'post_categories');
    }

    public function get_category_name(){
        return $this->post_categories()->get(['category']);
    }


    public function post_meta()
    {
        return $this->hasMany('App\PostMeta');
    }



    public function variant(){
        return $this->hasMany('App\Attribute');
    }

    public function product()
    {
        return $this->hasOne('App\Product');
    }
}
