<?php

namespace App\Http\Controllers\home\goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Goods\Type;
use App\Models\Goods\Goods;
use App\Models\Goods\Goodspic;


use DB;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        
            $goods = Goods::with('gimg')
            ->where(function($query) use($request){
                //检测关键字
                $gname = $request->input('search');
                $gid = $request->input('id');
                //如果商品不为空
                if(!empty($gname)) {
                    $query->where('gname','like','%'.$gname.'%');
                }

                // 如果有类别id
                if(!empty($gid)){
                    $query->where('tid',$gid);
                }

               
            })
            ->get();
        // dd($goods);


        return view('home.goods.list',[
            'title'=>'商品列表',
            'goods'=>$goods
        ]);
        
       

    }

 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * */
    public function show( $id)
    {

        $data = Goods::with('gimg')->where('id',$id)->get();
        // dd($data);

        return view('home.goods.details',[
            'title'=>'商品详情',
            'data'=>$data
        ]);
       
    }   


  
}
