<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class Homelogins extends Model
{
		protected $table = 'homelogins';
      protected $pk    = 'id';

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
     protected $fillable = ['lname','phone','password','email','status','token'];
}
