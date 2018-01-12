<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_contents', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('form_id');
			$table->integer('sort_order');
			$table->string('name',20);
			$table->string('content_type',20);
			$table->string('values',2000);
			$table->string('label');
			$table->string('placeholder');
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
        Schema::dropIfExists('form_contents');
    }
}
