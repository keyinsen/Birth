<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopAdminTable extends Migration
{
    /**
     * Run the migrations.
     * 创建 admin 管理员表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uname');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 回滚数据库迁移
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_admin');
    }

}
