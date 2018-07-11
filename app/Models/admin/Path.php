<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
      //
    protected $table = 'path';
    protected $pk    = 'pid';
   

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
     protected $fillable = ['pid','pname','phone','province','city','town','detail','status'];
}
