<?php

namespace App\Models\Goods;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    /**
     * 与模型关联的数据表   主键
     *
     * @var string
     */
    protected $table = 'goods';

    protected $primaryKey = 'id';

    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;


    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = ['gname','company','price','status','stock','addtime','tid','gdesc'];

     


    /**
     * 商品图片
     */
    public function gimg()
    {
        return $this->hasMany('App\Models\Goods\Goodspic','gid');
    }


    /**
     *  关联 商品类别
     * @return [type] [description]
     */
    public function type()
    {
        return $this->belongsTo('App\Models\Goods\Type','tid');
    }


   

}
