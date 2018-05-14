<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    public static function countcategories()
    {
        $category = DB::table('categories')->count();
        return $category;
    }

}
