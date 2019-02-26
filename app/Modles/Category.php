<?php

namespace App\Modles;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name','status'
    ];
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
