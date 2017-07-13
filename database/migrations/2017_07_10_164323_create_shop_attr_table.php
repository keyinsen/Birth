<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopAttrTable extends Migration
{
    /**
     * Run the migrations.
     *类别特征表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_attr', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
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
        Schema::dropIfExists('shop_attr');
    }
}
