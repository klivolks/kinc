<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlubPhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klub_phone', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('phone');
			$table->integer('sklub_id');
			$table->string('IsPrimary',1);
			$table->string('IsVerified',1);
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
        Schema::dropIfExists('klub_phone');
    }
}
