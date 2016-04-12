<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelBaru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user1', function (Blueprint $table) {
          $table->increments('id');
          $table->string('username');
          $table->string('password');
          $table->string('email');
          $table->string('phone');
          $table->string('name');
          $table->rememberToken();
          $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user1', function (Blueprint $table) {
            //
        });
    }
}
