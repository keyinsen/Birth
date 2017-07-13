<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenamecolumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *修改字段属性
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
//            $table->string('name', 100)->change();
//            $table->string('name', 255)->nullable()->change();
            $table->renameColumn('keyinsen', 'keke');
        });
    }

    /**
     * Reverse the migrations.
     *回滚
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
//                        $table->string('name', 255)->change();
            $table->renameColumn('keke', 'keyinsen');
        });
    }
}
