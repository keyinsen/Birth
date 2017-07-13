<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopModuleTable extends Migration
{
    /**
     * Run the migrations.
     *商品模块表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_module', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
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
        Schema::dropIfExists('shop_module');
    }
}
