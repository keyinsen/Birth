<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class RoleClass extends Model
{
    protected $table = 'shop_role';

    protected $fillable = ['title','description'];
}
