<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopAdminRoleTable extends Migration
{
    /**
     * Run the migrations.
     *管理员角色关联表
     * @return void
     */
    public function up()
    {
        Schema::create('shop_admin_role', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('role_id');
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
        Schema::dropIfExists('shop_admin_role');
    }
}
