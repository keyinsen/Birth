<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopUserTable extends Migration
{
    /**
     * Run the migrations.
     *用户表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_user', function (Blueprint $table) {
            $table->increments('uid');
            $table->string('email');
            $table->string('password');
            $table->string('uname');
            $table->integer('gender');
            $table->string('tel');
            $table->string('ip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *回滚用户表
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_user');
    }
}
