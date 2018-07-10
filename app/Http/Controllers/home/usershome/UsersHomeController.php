<?php

namespace App\Http\Controllers\home\usershome;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin\Message;
use App\Models\admin\Users;
use App\Models\admin\Path;
class UsersHomeController extends Controller
{
    /**
     * 显示个人中心
     */

    public function index()
    {
    	return view('home.homeuser.index');
    }

    /**
     * 个人资料
     */

    public function firstuser()
    {
      
      session(['username'=>'admin']);
      // dd(session('username')); 
      $user = Users::where('username',session('username'))->first();

      if($user){
        $message = Message::where('uid',$user['uid'])->first();
        session(['message'=>$message]);
        // session(['users'=>'']);
        // dd(session('message')['uid']);
          return view('home.homeuser.firstuser');
      }else{
        return view('home.homeuser.firstuser',['user'=>$user]);
      }
      // dd($user);
    	
    }


    public function dofirstuser(Request $request ,$id)
    { 
      $user = $request->except('_token','header','username');
      // $user['uid'] = $request->$id;
       if($request->hasFile('header')){

            //设置名字
            $name = str_random(10).time();

            //获取后缀
            $suffix = $request->file('header')->getClientOriginalExtension();

            //移动
            $request->file('header')->move('./uploads/',$name.'.'.$suffix);
            //存数据表
            $user['header'] = '/uploads/'.$name.'.'.$suffix;
        }
           // dd($user);

      
         try{
          
  $data = \DB::table('message')->update($user);
            if($data){
                return redirect('/home/homeuser/firstuser')->with('success','添加成功');
            }
        }catch(\Exception $e){

            return back()->with('error','添加失败');

        }

    
    }

    /**
     * 地址
     */
   	public function path()
   	{
      session(['username'=>'admin']);
       $user = Users::where('username',session('username'))->first();

       // dd($user);
        // $count = \DB::table('goodscar')->where('hid',session('uid'))->count();
        // dd($count);
       $path = \DB::table('path')->where('uid',$user['uid'])->get();
       session(['path'=>$path]);
       session(['uid'=>$user['uid']]);
       // dd(session()->all());
   		return view('home.homeuser.path',['path'=>$path]);
   	}

    public function dopath(Request $request)
    {
      $this->validate($request, [
          'pname' => 'required',
          'phone' => 'required',
          'province' => 'required',
          'city' => 'required',
          'town' => 'required',
          'detail' => 'required',
      ],[
        'pname.required'=>'收货人不能为空',
        'phone.required'=>'电话不能为空',
        'province.required'=>'请填写省',
        'city.required'=>'请填写城市',
        'town.required'=>'请填写区县',
        'detail.required'=>'请填写详细信息',

      ]);
      $path = $request->except('_token');

 
     
      // $message = Message::where('uid',$user['uid'])->first();
      // dd($path);
     try{
          
          $dopath = \DB::table('path')->insert($path);
            if($data){
                return redirect('home.homeuser.path')->with('success','添加成功');
            }
        }catch(\Exception $e){

            return back()->with('error','添加失败');

        }
    }


    public function pathajax(Request $request)
    {
       $pid =  $request->input('id');

       // echo $pid;

       \DB::table('path')->update(['status'=>'1']);

       $path = \DB::table('path')->where('pid',$pid)->update(['status'=>'0']);

       if ($path) {
         echo 0;
       }else{
        echo 1;
       }
    }

    public function ajaxdelete(Request $request)
    {
      $pid =  $request->input('id');
      // echo $pid;
      $count = \DB::table('goodscar')->where('hid',session('uid'))->count();
      echo $count;
       // echo $count;
      $delete = \DB::table('path')->where('pid',$pid)->delete();
     
      
    }
   	
}
