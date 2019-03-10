<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    public $incrementing = true;
    public $timestamps = true;
    public function categoryDetails() {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
