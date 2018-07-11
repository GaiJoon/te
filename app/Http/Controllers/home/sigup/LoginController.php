<?php

namespace App\Http\Controllers\home\sigup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Home\Homelogins;
use Hash;
class LoginController extends Controller
{
    //
    public function login()
    {
    	return view('/home/sigup/login');
    }

    public function dologin(Request $request)
    {
    	
    	// 表单验证
        $this->validate($request, [
        'lname' => 'required|unique:Homelogins,lname|regex:/^\w{1,12}$/',
        'password'=>'required|regex:/^\S{1,12}$/',

        ],[
        'lname.required'=>'姓名不能为空',
        'lname.regex'=>'姓名格式不正确',
        'password.required'=>'密码不能为空',
        'password.regex'=>'密码格式不正确',
        'lname.unique'=>'名字不能重复'
        ]);
    	// 除参数以外
    	// $res = $request->all();
    	$res = $request->except('_token');
    	
    	
    	$uname = Homelogins::where('lname',$res['lname'])->first();
    	
    	// 判断用户名是否一致
    	if(!$uname){
    		return back()->with('error','用户名不正确');
    	}
    	// 判断密码
    	if(!Hash::check($res['password'],$uname->password)){
    		return back()->with('error','用户名不正确');
    	}
    	session(['lname'=>$res['lname']]);
    	return redirect('/home/index');
    }	
    
}
