<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *订单明细
     * @return void
     */
    public function up()
    {
        Schema::create('shop_order_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('oid');
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
        Schema::dropIfExists('shop_order_detail');
    }
}
