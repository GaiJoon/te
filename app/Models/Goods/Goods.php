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

    protected $primaryKey = 'gid';


    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = ['gname','company','descr','price','gurl','status','stock','num','kg','addtime','dis','keyword','pic'];

     /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;


    /**
     * 获得此评论所属的文章。
     */
    public function cate()
    {
        return $this->belongsTo('App\Model\Goods\Type','tid');
    }



}
