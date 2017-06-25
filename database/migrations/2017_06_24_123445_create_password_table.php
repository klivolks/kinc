<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password', function (Blueprint $table) {
            $table->increments('id');
			$table->string('user_id');
			$table->string('password');
			$table->string('enc_type');
			$table->string('ip');
			$table->string('browser');
			$table->integer('location');
			$table->string('device');
			$table->string('IsActive',1);
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
        Schema::dropIfExists('password');
    }
}
