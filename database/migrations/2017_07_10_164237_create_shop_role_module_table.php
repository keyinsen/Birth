<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopRoleModuleTable extends Migration
{
    /**
     * Run the migrations.
     *角色权限表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_role_module', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id');
            $table->integer('module_id');
            $table->integer('privilege_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *回滚数据
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_role_module');
    }
}
