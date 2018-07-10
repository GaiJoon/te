<?php

namespace App\Http\Controllers\home\goodscar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodscarhomeController extends Controller
{
    
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {   
        // session('hid')
        $goods = \DB::table('goodscar')->where('hid','1')->get();
        

        return view('home.goodscar.goodscar',['goods'=>$goods]);
    }

    public function create()
    {

    }

    /**
     * 删除指定资源
     *d
     * @param  int  $id
     * @return \think\Response
     */
    public function delete(Request $request)
    {
       $id = $request->input('id');
       // dd($id);
        //构造器删除
        $data = \DB::table('goodscar')->where('cid',$id)->delete();

        $count = \DB::table('goodscar')->where('hid','1')->count();

        echo $count;

        
    }

    public function jia(Request $request)
    {
        $id = $request->input('id');
        $sum = $request->input('sum');
        // echo $id;
        // echo $sum;
        // $all = $request->all();
        // dd($id,$sum);
        // session(['cart'.$id =>$goods]);
        // session("cart.$id",$goods);
        $data =\DB::table('goodscar')->where('cid',$id)->update(['sum'=>$sum]);
        // dd($request->all());
    }

    public function jian(Request $request)
    {
        $id = $request->input('id');
        $sum = $request->input('sum');
        // session("cart.$id",$goods);
        // session(['cart'.$id =>$goods]);
         $data =\DB::table('goodscar')->where('cid',$id)->update(['sum'=>$sum]);
    }

    public function zongjia(Request $request)
    {
        $cun = $request->input('id');
        $zongjia = $request->input('zongjia');
        echo $zongjia;
        $data =\DB::table('goodscar')->where('cid',$cun)->get();
        session(['cart'.$cun => $data]);
        session(['zongjia'=> $zongjia]);
        // $request->session()->keep(['zongjia',$zongjia]);
    }

    public function cun(Request $request)
    {
        
        // echo $cun;
       
    }
}
