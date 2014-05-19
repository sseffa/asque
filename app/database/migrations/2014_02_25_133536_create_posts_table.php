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
            $table->string('slug');
			$table->integer('view_count');
			$table->integer('comment_count');
			$table->integer('favorite_count');
			$table->integer('vote_count');
			$table->integer('user_id');
			$table->integer('parent_id');
			$table->integer('accepted_answer_id');
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
