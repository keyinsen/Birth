<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopAvatarTable extends Migration
{
    /**
     * Run the migrations.
     *用户头像表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_avatar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid');
            $table->string('path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *回滚用户头像表
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_avatar');
    }
}
