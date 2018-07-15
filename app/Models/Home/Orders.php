<?php

namespace App\Models\home;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
  protected $table = 'orders';

 // protected $primaryKey = 'id';

 public $timestamps = false;


 /**
  * 可以被批量赋值的属性。
  *
  * @var array
  */
 protected $fillable = ['oid','name','uid','msg','status','path','phone','create_at'];


 public function odeta()
 {
     return $this->hasMany('App\Models\Home\Detail','oid','oid');
 }
}
