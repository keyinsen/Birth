<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'shop_admin';

    protected $fillable = ['uname','email','password'];

    //返回时隐藏不需要的字段
    protected $hidden = ['created_at','updated_at'];

}
