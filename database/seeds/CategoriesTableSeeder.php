<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Category::create([
      'name'=> 'Informàtica',
      'description'=> 'Categoria de Informàtica',
      ]);
      Category::create([
        'name'=> 'Fotografia',
        'description'=> 'Categoria de Fotografia',
      ]);
      Category::create([
        'name'=> 'Consoles i jocs',
        'description'=> 'Categoria de Consoles i jocs',
      ]);
    }
}
