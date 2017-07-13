<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopGoodsImageTable extends Migration
{
    /**
     * Run the migrations.
     *商品图片表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_goods_image', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gid');
            $table->string('img_path');
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
        Schema::dropIfExists('shop_goods_image');
    }
}
