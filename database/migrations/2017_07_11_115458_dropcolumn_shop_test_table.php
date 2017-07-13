<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropcolumnShopTestTable extends Migration
{
    /**
     * Run the migrations.
     *移除字段
     * @return void
     */
    public function up()
    {
        Schema::table('shop_test', function (Blueprint $table) {
//            $table->dropColumn('test3');
            $table->dropColumn(['test2', 'test3']);

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
            $table->string('test2');
            $table->string('test3');
        });
    }
}
