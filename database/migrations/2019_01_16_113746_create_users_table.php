<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token', 100)->comment('token');
            $table->string('tokenSecret', 100)->comment('tokenSecret');
            $table->unsignedBigInteger('twitter_id')->comment('TwitterAuthID');
            $table->string('nickname', 1024)->comment('nickname');
            $table->string('name', 1024)->comment('name');
            $table->string('email', 1024)->comment('email');
            $table->string('avatar', 1024)->comment('avatar');
            $table->string('avatar_original', 1024)->comment('avatar_original');
            $table->string('login_key', 1024)->comment('ログインキー')->nullable()->default(null);
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
        Schema::dropIfExists('users');
    }
}
