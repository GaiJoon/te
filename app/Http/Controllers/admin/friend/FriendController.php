<?php

namespace App\Http\Controllers\admin\friend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\friend\Friend;
class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        // 显示表单数据
        $res = Friend::where('fname','like','%'.$request->input('sou').'%')->paginate(5);
        $arr = ['sou'=>$request->input('sou')];

        return view('/admin/friend/index',['title'=>'友情链接浏览','arr'=>$arr,'res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/admin/friend/create',['title'=>'友情链接添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      
        // 表单验证
        $this->validate($request,[
            'fname'=>'required|unique:friend,fname',
            'url'=>'required|unique:friend,fname'
            ],[
            'fname.required'=>'链接名称不能为空',
            'fname.unique'=>'链接名称不能重复',
            'url.required'=>'链接地址不能为空',
            'url.unique'=>'链接地址不能重复'
            ]);
          // 获取数据
        $res = $request->except('_token');
        $res['addtime']=time();
        // 把数据添加到数据库
        $data = Friend::create($res);
        if($data){
            return redirect('/admin/friend');
        }


    }

    /*链接地址
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($fid)
    {
        // $res=Friend::find($fid);
        // dump($res);
        //获取表单数据
        $res = Friend::where('fid',$fid)->first();
        return view('/admin/friend/edit',['res'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $fid)
    {
        //
         // 表单验证
        $this->validate($request,[
            'fname'=>'required|unique:friend,fname',
            'url'=>'required|unique:friend,fname'
            ],[
            'fname.required'=>'链接名称不能为空',
            'fname.unique'=>'链接名称不能重复',
            'url.required'=>'链接地址不能为空',
            'url.unique'=>'链接地址不能重复'
            ]);
        // 提取部分参数
        $res = $request->except('_token','_method');
        // 修改数据
        $data = Friend::where('fid',$fid)->update($res);
        if($data){
            return redirect('/admin/friend')->with('info','修改成功');
        }


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($fid)
    {
        //第一种方法
        // $res = \DB::destroy($fid);
        // 第二种方法
          $res = friend::where('fid',$fid)->delete();
          if($res){
            return redirect('/admin/friend')->with('info','删除成功');
          }
    }
}
