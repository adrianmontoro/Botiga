<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Charge extends Model
{
    protected $fillable = [
        'user_id', 'price',
    ];

    public static function countcharges()
    {
      $charge = DB::table('charges')->count();

      $price = DB::table('charges')->sum('price');
        return $price;
    }

}
