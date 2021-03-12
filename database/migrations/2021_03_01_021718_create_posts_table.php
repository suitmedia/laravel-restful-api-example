<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->comment('The identifier and primary key of post record.');
            $table->bigInteger('post_category_id')->unsigned()->comment('The identifier and foreign key of the related post category record.');
            $table->bigInteger('admin_id')->unsigned();
            $table->string('title', 128)->comment('The title of specified post, max 128 characters long.');
            $table->string('description', 255)->comment('The description of specified post, max 255 characters long.');
            $table->text('content')->comment('The content of specified post.');
            $table->boolean('published')->unsigned()->comment('Indicate whether the post has been published. If the value is `0` then the post is not published yet.');
            $table->dateTime('deleted_at')->nullable()->comment('Indicate whether the record has been deleted. If the value is `null` then it is not deleted.');
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();


            $table->foreign('post_category_id')
                ->references('id')
                ->on('post_categories')
                ->onDelete('cascade');
            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
