<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->comment('The identifier and primary key of comment record.');
            $table->bigInteger('post_id')->unsigned()->comment('The identifier and foreign key of the related post record.');
            $table->bigInteger('user_id')->unsigned()->comment('The identifier and foreign key of the related user record.');
            $table->text('content')->comment('The content of specified comment.');
            $table->boolean('published')->unsigned()->comment('Indicate whether the post has been published. If the value is `0` then the comment is not published yet.');
            $table->dateTime('deleted_at')->nullable()->comment('Indicate whether the record has been deleted. If the value is `null` then it is not deleted.');
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();


            $table->foreign('post_id')
                ->references('id')
                ->on('posts')
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
        Schema::dropIfExists('comments');
    }
}
