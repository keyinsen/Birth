<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *添加表字段
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('votes');
            $table->string('keyinsen');
        });
    }
    /**
     * Reverse the migrations.
     *删除表字段
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('votes','keyinsen'); //删除表的字段
//            $table->dropColumn('votes', 'avatar', 'location'); //删除多个字段
//            $table->renameColumn('from', 'to');//修改表的字段
        });
    }
}
