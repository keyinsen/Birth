<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *运行数据库填充
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            //s生成随机数
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            //bcrypt加密
            'password' => bcrypt('secret'),
        ]);
        $this->call(AdminTableSeeder::class);
    }
}
