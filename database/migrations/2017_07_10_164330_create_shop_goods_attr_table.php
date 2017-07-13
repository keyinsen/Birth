<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopGoodsAttrTable extends Migration
{
    /**
     * Run the migrations.
     *商品特征值表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_goods_attr', function (Blueprint $table) {
            $table->increments('gid');
            $table->string('attr');
            $table->string('value');
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
        Schema::dropIfExists('shop_goods_attr');
    }
}
