<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *自带重置密码表
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
//            ->index()
            $table->string('email');
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *数据表回滚
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
