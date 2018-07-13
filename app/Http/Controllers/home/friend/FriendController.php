<?php

namespace App\Http\Controllers\home\friend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Home\Friend;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 获取数据
      $res= Friend::where('fname','like','%'.$request->input('sou').'%')->paginate(2);
        $arr = ['sou'=>$request->input('sou')];
        return view('/home/friend/index',['title'=>'链接浏览','res'=>$res,'arr'=>$arr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //显示创建资源表单页
        return view('/home/friend/create',['title'=>'添加友情链接']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dump($request->all());
        $res=$request->except(['_token']);
        // 表单验证
        $this->validate($request,[
            'fname'=>'required|unique:friend,fname',
            'url'=>'required|unique:friend,fname',
            ],[
            'fname.required'=>'姓名不能为空',
            'fname.unique'=>'名字不能重复'
            ]);
        $res['addtime'] = time();

        // 把数据添加到数据库
        $data = Friend::create($res);
        if($data){
            return redirect('/home/friend')->with('info','添加成功');
        }
        
    }

    /**
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
