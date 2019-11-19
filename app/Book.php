<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Reference to reviews
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
