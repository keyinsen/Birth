<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenamecolumnShopTestTable extends Migration
{
    /**
     * Run the migrations.
     *重命名字段
     * @return void
     */
    public function up()
    {
        Schema::table('shop_test', function (Blueprint $table) {
            $table->renameColumn('test', 'totest');
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
            $table->renameColumn('totest', 'test');
        });
    }
}
