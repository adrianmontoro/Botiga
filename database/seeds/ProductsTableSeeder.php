<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $product = Product::create([
        'name'  => 'Play4',
        'description'  => 'Consola PlayStation4',
        'properties'  => '500GB Disc',
        'picture'  => asset('images/play4.jpg'),
        //'category_id' => '3',
      ]);

      $product = Product::create([
        'name'  => 'Cannon lf453',
        'description'  => 'Càmara professional Cannon',
        'properties'  => '142 megapíxels',
        'picture'  => asset('images/cannon.jpg'),
        //'category_id' => '2',
      ]);

      $product = Product::create([
        'name'  => 'Lenovo RFD 12314u',
        'description'  => 'Portatil gaming Lenovo',
        'properties'  => 'Gràfica: GTX1080OC',
        'picture'  => asset('images/lenovo.jpg'),
        //'category_id' => '1',
      ]);
    }
}
