<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
      //
    protected $table = 'message';
    protected $pk    = 'mid';
   

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
     protected $fillable = ['uid','mname','sex','phone','email','header','barthday'];
}
