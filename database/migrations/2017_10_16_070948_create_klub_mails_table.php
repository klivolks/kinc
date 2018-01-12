<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlubMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klub_mails', function (Blueprint $table) {
            $table->increments('id');
			$table->string('email');
			$table->integer('klub_id');
			$table->integer('user_id');
			$table->string('IsPrimary',1);
			$table->string('IsActive',1);
			$table->string('IsVerified',1);
			$table->string('verification_key');
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
        Schema::dropIfExists('klub_mails');
    }
}
