<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *生成数据 保存数据
     * @return void
     */
    public function run()
    {
        factory(App\Models\Admin::class,10)->create()->each(function ($u){
//            $Admin = new Admin();
//            $Admin->fill($u->toarray())->save();
            dump($u);exit;
        });

    }
}
