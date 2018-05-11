<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
      'title','hint','content','imageurl','drname','seenTimes','likes'
    ];
}
