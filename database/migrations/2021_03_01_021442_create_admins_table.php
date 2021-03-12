<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned()->comment('The identifier and primary key of user record.');
            $table->string('name', 128)->comment('The name of specified user, max 128 characters long.');
            $table->string('email', 128)->comment('The email of specified user, max 128 characters long.');
            $table->string('password', 128)->comment('The password of specified user, max 128 characters long.');
            $table->string('role', 45)->comment('The role of specified user.');
            $table->dateTime('deleted_at')->nullable()->comment('Indicate whether the record has been deleted. If the value is `null` then it is not deleted.');
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
