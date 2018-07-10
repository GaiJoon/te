<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Message;
class Users extends Model
{
    //
    protected $table = 'users';
    protected $pk    = 'uid';
   

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
     protected $fillable = ['username','password','auth','addtime','img'];

        public function user()
        {
            return $this->hasOne('Message','uid','uid');
        }
 
}
