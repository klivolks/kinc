<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			$table->string('domain');
			$table->string('IsActive',1);
			$table->dateTime('logged_in');
			$table->dateTime('logged_out');
			$table->string('ip');
			$table->string('browser');
			$table->string('device');
			$table->integer('location');
			$table->string('session_key')->unique();
			$table->string('IsRemembered',1);
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
        Schema::dropIfExists('sessions');
    }
}
