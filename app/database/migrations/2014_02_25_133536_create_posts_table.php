<?php

use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function ($table) {
			$table->increments('id');
			$table->integer('post_type_id');
  			$table->string('title', 255);
  			$table->text('body');
			$table->integer('view_count');
			$table->integer('commment_count');
			$table->integer('favorite_count');
			$table->integer('user_id');
			$table->datetime('closed_at');
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
		Schema::drop('posts');
	}

}
