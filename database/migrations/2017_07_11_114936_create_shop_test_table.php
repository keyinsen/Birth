<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopTestTable extends Migration
{
    /**
     * Run the migrations.
     *创建测试表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_test', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('aa');
            $table->string('test');
            $table->string('test1');
            $table->string('test2');
            $table->string('test3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *修改测试表
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_test');
    }
}
