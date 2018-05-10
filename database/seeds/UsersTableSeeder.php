<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
      'name'  => 'Administrador',
      'surname'  => 'Administrador',
      'country'  => 'Spain',
      'city'  => 'Amposta',
      'tel'  => '977719343',
      'email'  => 'admin@gmail.com',
      'password'  => bcrypt('123456'),
      'email_token' => base64_encode('admin@gmail.com'),
      'active'  => '1',
      'verified'  => '1',
      'role_id'  => '1'
    ]);
    //$user->assignRole('administrador');


    User::create([
      'name'  => 'user',
      'surname'  => 'user',
      'country'  => 'Spain',
      'city'  => 'Amposta',
      'tel'  => '977719343',
      'email'  => 'user@gmail.com',
      'password'  => bcrypt('123456'),
      'email_token' => base64_encode('user@gmail.com'),
      'active'  => '1',
      'verified'  => '1',
      'role_id'  => '2'
    ]);
  //  $user->assignRole('user');
  }
}
