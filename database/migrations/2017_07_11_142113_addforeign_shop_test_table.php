<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddforeignShopTestTable extends Migration
{
    /**
     * Run the migrations.
     *创建外键关联
     * @return void
     */
    public function up()
    {
        Schema::table('shop_test', function (Blueprint $table) {
            $table->foreign('uuid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *回滚
     * @return void
     */
    public function down()
    {
        Schema::table('shop_test', function (Blueprint $table) {
            $table->dropForeign('shop_test_uuid_foreign');
        });
    }
}
