<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni');
            $table->string('name');
            $table->string('surname');
            $table->string('country');
            $table->string('city');
            $table->string('tel');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('email_token');
            $table->boolean('active')->default(true);
            $table->boolean('verified')->default(false);
            $table->unsignedInteger('role_id');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
