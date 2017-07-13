<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *手动配置迁移命令migrate生成的默认字符串长度，在AppServiceProvider中调用Schema::defaultStringLength方法来实现配置
     * @return void
     */
    public function boot()
    {
//        生成的默认字符串长度
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
