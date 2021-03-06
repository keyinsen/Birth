<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class goods extends Model
{
    protected $table="shop_goods";
    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * 模型的日期字段保存格式。
     *
     * @var string
     */
    protected $dateFormat = 'U';

    /**
     * 此模型的连接名称。
     *
     * @var string
     */
    protected $connection = 'connection-name';
}
