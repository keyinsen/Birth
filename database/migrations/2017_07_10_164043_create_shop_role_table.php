<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopRoleTable extends Migration
{
    /**
     * Run the migrations.
     *创建角色表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_role', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('角色');
            $table->string('description')->comment('角色描述');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *回滚数据库
     * @return void
     */
    public function down(){

        Schema::dropIfExists('shop_role');

    }
}
