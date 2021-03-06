<?php

namespace App\Models\vip;

use Illuminate\Database\Eloquent\Model;

class Vip extends Model
{
    //
     protected $table = 'vip';
      protected $pk    = 'vid';

       /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;

     /**
     * 可以被批量添加的属性
     *
     * @var array
     *
     */
     protected $fillable = ['vauth','vtime'];
}
