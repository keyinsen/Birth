<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class AdminClass extends Model
{
    protected $table = 'shop_admins';

    protected $fillable = ['uname','email','password'];
}
