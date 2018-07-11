<?php

namespace App\Models\poster;

use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    //
      protected $table = 'poster';
      protected $pk    = 'posterid';
   

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
     protected $fillable = ['postername','imgurl','addtime','img'];

}
