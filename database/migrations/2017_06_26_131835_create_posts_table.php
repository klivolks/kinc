<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('author_id');
			$table->integer('author_type');
			$table->integer('user_id');
			$table->integer('content_type');
			$table->string('permalink');
			$table->integer('view');
			$table->date('expiry');
			$table->string('IsActive',1);
			$table->string('IsDeleted',1);
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
        Schema::dropIfExists('post');
    }
}
