<?php

namespace App\Models\Goods;

use Illuminate\Database\Eloquent\Model;

class Cheap extends Model
{
    /**
     * 与模型关联的数据表   主键
     *
     * @var string
     */
    protected $table = 'salegoods';

    protected $primaryKey = 'id';


    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = ['tname','pid','path'];

     /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;
}
