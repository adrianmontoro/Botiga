<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role = Role::create([
        'name'=>'administrador'

      ]);

      $role = Role::create([
        'name'=>'user'
        
      ]);

    }
}
