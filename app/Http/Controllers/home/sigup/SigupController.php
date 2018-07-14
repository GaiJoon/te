<?php

namespace App\Http\Controllers\home\sigup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use  App\Models\Home\Homelogins;
use Mail;
class SigupController extends Controller
{
    //
    public function regist()
    {
    	// 注册表
    	return view('/home/sigup/create');
    }

    public function doregist(Request $request)
    {
        
        //表单验证
         $this->validate($request, [
        'lname' => 'required|unique:homelogins,lname',
        'password'=>'required|regex:/^\S{1,12}$/',
        'upas'=>'same:password',
        'email'=>'email',
        'phone'=>'required'

        ],[
        'lname.required'=>'姓名不能为空',
        'password.required'=>'密码不能为空',
        'password.regex'=>'密码格式不正确',
        'username.unique'=>'名字不能重复',
        'email.email'=>'邮箱格式不正确',
        'phone.requ`ired'=>'手机号不能为空',
        ]);
    	$res = $request->except('_token','upas');

        // 密码加密
        $res['password']=Hash::make($request->input('password'));
        $res['status']='0';
        $res['token']=str_random(50);

        $data = Homelogins::create($res);
    	// $data = DB::table('homelogins')->insert($res);
        $id=$data->id;
        // dd($id);
        $token=$data->token;

        if($data){

            //发送邮件

            // email.remind 邮件内容 html模板
            Mail::send('home.email.remind',['id'=>$id,'token'=>$token], function($m) use($res) {

                   $m->from(env('MAIL_USERNAME'), '百度网-人力资源部');//发件人
                                                                    //主题
                $m->to($res['email'], $res['lname'])->subject('葛二蛋你吃了么');//去哪了
            });

           return view('/home/email/news');

        }

    }

    public function jihuo(Request $request)
    {
        $id = $request->input('id');
        $token = $request->input('token');
        $data = homelogins::where('id',$id)->first();

        if($data->token != $token){
            abort('404');
        }
        $rs['status']='1';
        $info = homelogins::where('id',$id)->update($rs);



        if($info){
            return redirect('/home/login')->with('success','激活成功');

        }
    }



}
