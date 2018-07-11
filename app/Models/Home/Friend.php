<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    //
      protected $table = 'friend';
      protected $pk    = 'fid';

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
     protected $fillable = ['fname','url','addtime'];
}
