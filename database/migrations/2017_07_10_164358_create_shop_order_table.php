<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopOrderTable extends Migration
{
    /**
     * Run the migrations.
     *订单表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_order', function (Blueprint $table) {
            $table->increments('oid');
            $table->integer('order_num');
            $table->integer('uid');
            $table->string('create_time');
            $table->string('update_time');
            $table->integer('status_id');
            $table->string('status');
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
        Schema::dropIfExists('shop_order');
    }
}
