<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenamePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *重命名表名
     * @return void
     */
    public function up()
    {
        schema::rename('password_resets', 'aaaa');
    }

    /**
     * Reverse the migrations.
     *回滚
     * @return void
     */
    public function down()
    {
        schema::rename('aaaa', 'password_resets');
    }
}
