<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
      }

      public function books(){
        return $this->belongsToMany('App\Models\Book')->withPivot('quantity');;
      }   
}
