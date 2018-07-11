<?php

namespace App\Http\Controllers\admin\lunbo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\lunbo;
use Illuminate\Support\Facades\Storage;
class LunBoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $lunbo = lunbo::paginate(2);
      
        foreach ($lunbo as $k => $v) {
          $img= $v['url'];
          $v['url'] = explode('|',$img);
             
        }
       
        
        // dd($lunbo);
        return view('admin.lunbo.lunboindex',['lunbo'=>$lunbo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('admin.lunbo.lunbocreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //表单验证
        $this->validate($request, [
        'title' => 'required|max:255',
        'addtime' => 'required',
        'url' => 'required'
    ],[
        'title.required' => '标题不能为空',
        'title.required' => '标题只能填255个字符',
        'addtime.required' => '请填入时间',
        'url.required'  => '图片不能为空'
    ]);

        $res = $request->except(['_token','url']);
        

        
        //商品图片
        if($request->hasFile('url')){

            $gp = $request->file('url');

            

            foreach($gp as $k => $v){

              

                //设置名字
                $name = str_random(10).time();

                //获取后缀
                $suffix = $v->getClientOriginalExtension();

                //移动
                $v->move('./uploads/',$name.'.'.$suffix);

                // $gc['gid'] = $gid;

                $res['url'][] = '/uploads/'.$name.'.'.$suffix;

                // dump($gc); 

              

            }
            $res['url'] = implode('|',$res['url']);

            // dd($res);
           
            // var_dump($data);
            try{
                 $data = \DB::table('lunbo')->insert($res);
            if($data){
                return redirect('/admin/lunbo')->with('success','添加成功');
            }
        }catch(\Exception $e){

            return back();

        }
            
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // echo $id;
        $lunbo = \DB::table('lunbo')->where('lid',$id)->first();
        // dump($lunbo);

      
          $img= $lunbo->url;
          $lunbo->url = explode('|',$img);
             
        
        // dump($lunbo->url);
        return view('admin.lunbo.lunboedit',['lunbo'=>$lunbo]);
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
        //表单验证
        $this->validate($request, [
        'title' => 'required|max:255',
        'addtime' => 'required',
        'url' => 'required'
    ],[
        'title.required' => '标题不能为空',
        'title.required' => '标题只能填255个字符',
        'addtime.required' => '请填入时间',
        'url.required'  => '图片不能为空'
    ]);

        $res = $request->except(['_token','url','_method']);
        

        
        //商品图片
        if($request->hasFile('url')){

            $gp = $request->file('url');

            

            foreach($gp as $k => $v){

              

                //设置名字
                $name = str_random(10).time();

                //获取后缀
                $suffix = $v->getClientOriginalExtension();

                //移动
                $v->move('./uploads/',$name.'.'.$suffix);

                // $gc['gid'] = $gid;

                $res['url'][] = '/uploads/'.$name.'.'.$suffix;

                // dump($gc); 

              

            }
            $res['url'] = implode('|',$res['url']);

            // dd($res);
           
            // var_dump($data);
            try{
                 $data = \DB::table('lunbo')->where('lid',$id)->update($res);
            if($data){
                return redirect('/admin/lunbo')->with('success','添加成功');
            }
        }catch(\Exception $e){
            // echo 1;
            return back();

        }
            
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo $id;
        $foo = lunbo::find($id);

        $urls = $foo->url;

        // dd($urls);
        $urls =  explode('|',$urls);
        foreach ($urls as $k => $v) {
          
           $info = '@'.unlink('.'.$v);
        }
        

        if(!$info)  return ;

        //第一种
        // $res = lunbo::where('lid',$id)->delete();
        //第二种
        $res = lunbo ::destroy($id);

        if($res){

            return redirect('/admin/lunbo')->with('success','删除成功');
        }

    }


     public function shangjia($id,$status=2)
    {
        $goods = lunbo::find($id);
        $goods->status = $status;
        $goods->save();

        return redirect('/admin/lunbo');
    }
    public function xiajia($id,$status=1)
    {
         $goods = lunbo::find($id);
        $goods->status = $status;
        $goods->save();

        return redirect('/admin/lunbo');
    }
}
