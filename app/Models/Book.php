<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function rental()
    {
        return $this->hasMany('App\Models\Rental');
    }

    public function area()
    {
        return $this->belongsTo('App\Models\Area');
    }

    public function library()
    {
        return $this->belongsTo('App\Models\Library');
    }
}
