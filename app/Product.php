<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'properties', 'price', 'picture',
    ];

    public function afegircate($id,$cat){
      DB::table('products-category')->where('product_id','=',$id)->delete();
        for($i=0;$i<count($cat);$i++){
          DB::table('products-category')->insert([
            'product_id'=>$id,
            'category_id'=>$cat[$i],
          ]);
        }
    }

    public function deletartcate($id){
      DB::table('products-category')->where('product_id','=',$id)->delete();
    }

    public static function countproducts()
    {
        $product = DB::table('products')->count();
        return $product;
    }
}
