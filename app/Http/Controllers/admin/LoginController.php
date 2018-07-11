<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder; 
use Session;
use Hash;
use App\Models\admin\Users;
class LoginController extends Controller
{
    //
    public function login()
    {
   		 return view('/admin/login/login',['title'=>'后台登陆']);

    }
    public function dologin(Request $request)
    {
    	//表单验证
    	// $res=$request->all();
    	$res=$request->except('_token');
    	// 带着条件去查找
    	$uname=Users::where('username',$res['username'])->first();
    	
    	// 获取用户名
    	if(!$uname){
    		return back()->with('error','用户名不正确');
    	}
    	// 判断密码
    	if(!Hash::check($res['password'],$uname->password)){
    		return back()->with('error','密码错误');
    	}
    	// 验证码
    	if(session('code')!=$res['code']){
    		return back()->with('error','验证码错误');
    	}
    	session(['username'=>$res['username']]);
    	return redirect('/admin/index');
	
    } 

    //生成验证码方法
	public function captcha()
	{
	    $phrase = new PhraseBuilder;
	    // 设置验证码位数
	    $code = $phrase->build(3);
	    // 生成验证码图片的Builder对象，配置相应属性
	    $builder = new CaptchaBuilder($code, $phrase);
	    // 设置背景颜色
	    $builder->setBackgroundColor(123, 203, 230);
	    $builder->setMaxAngle(25);
	    $builder->setMaxBehindLines(0);
	    $builder->setMaxFrontLines(0);
	    // 可以设置图片宽高及字体
	    $builder->build($width = 100, $height = 50, $font = null);
	    // 获取验证码的内容
	    $phrase = $builder->getPhrase();
	    // 把内容存入session
	    //可以使用
	    // Session::flash('code', $phrase);

	    //
	    session(['code'=>$phrase]);


	    // 生成图片
	    header("Cache-Control: no-cache, must-revalidate");
	    header("Content-Type:image/jpeg");
	    $builder->output(); 
	}

	public function logout()
	{
		// 删除session信息
		session(['username'=>'']);
		// 跳转
		return redirect('/admin/login/login');
	}
}
