<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *商品表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_goods', function (Blueprint $table) {
            $table->increments('gid');
            $table->integer('cid');
            $table->string('sku');
            $table->string('gname');
            $table->float('price');
            $table->float('discount');
            $table->integer('store_num');
            $table->string('brand');
            $table->string('art_path');
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
        Schema::dropIfExists('shop_goods');
    }
}
