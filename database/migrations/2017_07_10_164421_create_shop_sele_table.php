<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopSeleTable extends Migration
{
    /**
     * Run the migrations.
     *商品销售明细记录
     * @return void
     */
    public function up()
    {
        Schema::create('shop_sele', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid');
            $table->integer('gid');
            $table->integer('cid');
            $table->integer('num');
            $table->string('time');
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
        Schema::dropIfExists('shop_sele');
    }
}
