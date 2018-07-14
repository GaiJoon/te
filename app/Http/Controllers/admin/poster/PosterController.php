<?php

namespace App\Http\Controllers\admin\poster;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\poster\Poster;
class PosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        // 获取数据
        $res= Poster::where('postername','like','%'.$request->input('sou').'%')->paginate(5);
        $arr = ['sou'=>$request->input('sou')];
        // 显示表单数据
        return view('/admin/poster/index',['title'=>'广告列表',
            'res'=>$res,
            'arr'=>$arr]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        //显示添加表单
        return view('/admin/poster/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //查询所有数据
        // $res = $request->all();
        // 除去表字段数据
        $res= $request->except('_token','img');
        // 表单验证
        $this->validate($request,[
            'postername'=>'required',
            'imgurl'=>'required'
            ],[
            'postername.required'=>'商家名称不能为空',
            'imgurl.required'=>'链接地址不能为空'
            ]);
        $res['addtime']=time();
        //检查是否有文件上传
        if($request->hasFile('img')){
            // 设置名字
            $name = str_random(10).time();
            // 获取后缀
            $suffix = $request->file('img')->getClientOriginalExtension();
            // 移动
            $request->file('img')->move('./uploads/',$name.'.'.$suffix);

        }
        // 存数据表
        $res['img'] = '/uploads/'.$name.'.'.$suffix;

        // 把数据添加到数据库
        $data = DB::table('poster')->insert($res);
       if($data){
        return redirect('/admin/poster')->with('info','添加成功');
       }else{
        return back();
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
    public function edit($posterid)
    {
        // echo 45678;
        //
        // 获取表单数据
        $res = Poster::where('posterid',$posterid)->first();
        //  // 显示表单数据
        return view('/admin/poster/edit',['res'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $posterid)
    {
        $res = $request->except('_token','img','_method');
        
                        // 表单验证
        $this->validate($request,[
            'postername'=>'required',
            'imgurl'=>'required'
            ],[
            'postername.required'=>'商家名称不能为空',
            'imgurl.required'=>'链接地址不能为空'
            ]);
        $res['addtime']=time();
        //检查是否有文件上传
        if($request->hasFile('img')){
            // 设置名字
            $name = str_random(10).time();
            // 获取后缀
            $suffix = $request->file('img')->getClientOriginalExtension();
            // 移动
            $request->file('img')->move('./uploads/',$name.'.'.$suffix);

        }
        // 存数据表
        $res['img'] = '/uploads/'.$name.'.'.$suffix;
        // 保存数据到表单
        $data = Poster::where('posterid',$posterid)->update($res);
        if($data){
            return redirect('/admin/poster')->with('info','修改成功');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($posterid)
    {
        
        // $res = DB::destroy($posterid);
        $res = Poster::where('posterid',$posterid)->delete();
        // dump($res);die;
        if($res){
            return redirect('/admin/poster')->with('info','删除成功');
        }
    }
}
