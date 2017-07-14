<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *生成数据 保存数据 批量 测试专用
     * @return void
     */
    public function run()
    {
        factory(Admin::class,10)->create()->each(function ($u){
            $arr=[
                'uname'=>$u['uname'],
                'email'=>$u['email'],
                'password'=>$u['password']
            ];
//            dump($u);exit;
        });

    }
}
