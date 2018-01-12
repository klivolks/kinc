<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlubFbPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klub_fb_page', function (Blueprint $table) {
            $table->increments('id');
			$table->string('fb_page_id');
			$table->integer('user_id');
			$table->integer('klub_id');
			$table->string('last_post');
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
        Schema::dropIfExists('klub_fb_page');
    }
}
