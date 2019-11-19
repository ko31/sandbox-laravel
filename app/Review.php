<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // Reference to books
    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
