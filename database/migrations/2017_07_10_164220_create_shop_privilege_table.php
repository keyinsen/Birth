<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopPrivilegeTable extends Migration
{
    /**
     * Run the migrations.
     *权限表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_privilege', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
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
        Schema::dropIfExists('shop_privilege');
    }
}
