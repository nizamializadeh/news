<?php

namespace App\Modles;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','image','text','slug','count',
        'video','keyword','category_id','user_id',
        'status','trend','head','break','feature',
    ];
    public function tags()
    {
        return $this->belongsToMany(Tag::class,'post_tags');
    }
    public function images(){
        return $this->hasMany('App\Modles\Image', 'post_id');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function category(){
        return $this->belongsTo('App\Modles\Category');
    }
}
