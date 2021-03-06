<?php

namespace App\Models\Goods;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    /**
     * 与模型关联的数据表   主键
     *
     * @var string
     */
    protected $table = 'type';

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



    public static function getsubcate($pid)
    {

        $cate = Type::where('pid',$pid)->get();
        
        $arr = [];

        foreach($cate as $k=>$v){

            if($v->pid==$pid){

                $v->sub=self::getsubcate($v->id);

                $arr[]=$v;
            }
        }  
        return $arr;
    }

    


    
}
