<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopCartTable extends Migration
{
    /**
     * Run the migrations.
     *购物车表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_cart', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid');
            $table->integer('gid');
            $table->string('gname');
            $table->float('price');
            $table->string('art_path');
            $table->float('discount');
            $table->integer('num');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *回滚
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_cart');
    }
}
