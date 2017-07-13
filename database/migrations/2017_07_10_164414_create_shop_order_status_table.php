<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopOrderStatusTable extends Migration
{
    /**
     * Run the migrations.
     *订单状态表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_order_status', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *执行回滚
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_order_status');
    }
}
