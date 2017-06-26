<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubKlubMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_klub_member', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('sklub_id');
			$table->integer('user_id');
			$table->string('IsActive',1);
			$table->string('role');
			$table->string('designation');
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
        Schema::dropIfExists('sub_klub_member');
    }
}
