<?php

namespace App\Models\home;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
  protected $table = 'detail';

 protected $primaryKey = 'did';

 public $timestamps = false;


 /**
  * 可以被批量赋值的属性。
  *
  * @var array
  */
 protected $fillable = ['did','oid','gid','gname','price','num'];


 // public function odeta()
 // {
 //     return $this->hasMany('App\Models\Home\Detail','oid','oid');
 // }
}
