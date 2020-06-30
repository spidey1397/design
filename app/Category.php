<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    public function images()
    {
        return $this->morphMany('App\Image' , 'imageable');
    }
}
