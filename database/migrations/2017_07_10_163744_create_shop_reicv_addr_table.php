<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopReicvAddrTable extends Migration
{
    /**
     * Run the migrations.
     *收货地址表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_reicv_addr', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid')->comment('用户id');
            $table->string('province')->comment('省份');
            $table->string('city')->comment('城市');
            $table->string('street')->comment('街道');
            $table->string('detail')->comment('详细地址');
            $table->string('postcode')->comment('邮编');
            $table->string('name')->comment('姓名');
            $table->string('tel')->comment('电话号码');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *回滚数据库
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_reicv_addr');
    }
}
