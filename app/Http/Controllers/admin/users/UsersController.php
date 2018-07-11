<?php

namespace App\Http\Controllers\admin\users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use App\Models\admin\Users;
use Config;
class UsersController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        
        // 获取数据
         $users = Users::where('username','like','%'.$request->input('sou').'%')->paginate(5);
        $arr = ['sou'=>$request->input('sou')]; 

        return view('admin.users.index',[
            'title'=>'用户列表页面',
            'users'=>$users,
            'arr'=>$arr
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示创建资源表单页
        return view('admin/users/create',['title'=>'用户添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // 获取表单所有数据
        // dump($request->all());
         //表单验证
         $this->validate($request, [
        'username' => 'required|unique:users,username|regex:/^\W{1,12}$/',
        'password'=>'required|regex:/^\S{1,12}$/',
        'upas'=>'same:password',

        ],[
        'username.required'=>'姓名不能为空',
        'username.regex'=>'姓名格式不正确',
        'password.required'=>'密码不能为空',
        'password.regex'=>'密码格式不正确',
        'upas.same'=>'两次密码不一致',
        'username.unique'=>'名字不能重复'
        ]);
         $res = $request->except(['_token','upas','img']);
         //头像
        if($request->hasFile('img')){

            //设置名字
            $name = str_random(10).time();

            //获取后缀
            $suffix = $request->file('img')->getClientOriginalExtension();

            //移动
            $request->file('img')->move('./uploads/',$name.'.'.$suffix);
        }
         //存数据表
        $res['img'] = '/uploads/'.$name.'.'.$suffix;
         // 密码加密
         $res['password']=Hash::make($request->input('password'));
         $res['addtime'] = time();
          // dump($res);
         // 模型添加数据到数据库
         $data = Users::create($res);
         if($data){
            return redirect('/admin/users')->with('info','添加成功');
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
    public function edit($uid)
    {
        //
        $users=Users::where('uid',$uid)->first();
        return view('/admin/users/edit',['users'=>$users,'uid'=>$uid]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uid)
    {
        //表单验证
          $this->validate($request, [
        'username' => 'required|regex:/^\W{1,12}$/',
        ],[
        'username.required'=>'姓名不能为空',
        'username.regex'=>'姓名格式不正确',
        ]);
          // 提取部分参数
        $res = $request->except('_token','_method');
        // 修改数据
        $data = Users::where('uid',$uid)->update($res);

        if($data){
            return redirect('/admin/users')->with('success','修改成功');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uid)
    {

       
        $res = Users::where('uid',$uid)->delete();
        if($res){
            return redirect('/admin/users')->with('success','删除成功');
        }   
    }
}
