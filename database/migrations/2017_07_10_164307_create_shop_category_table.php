<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *商品类别表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_category', function (Blueprint $table) {
            $table->increments('cid');
            $table->string('cname');
            $table->integer('parent_id');
            $table->string('path');
            $table->string('description');
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
        Schema::dropIfExists('shop_category');
    }
}
