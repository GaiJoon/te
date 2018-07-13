<?php

namespace App\Http\Controllers\admin\goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Goods\Type;
use App\Models\Goods\Goods;
use App\Models\Goods\Goodspic;


use DB;


class GoodsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data = Goods:: orderBy('id','asc')->
            where('gname','like','%'.$request->input('search').'%')->
            paginate(15);

            $arr = ['search' => $request->input('search')];


        /*$data = Goods::orderBy('id','asc')
            ->where(function($query) use($request){
                //检测关键字
                $gname = $request->input('gname');
                $p = $request->input('price');
                //如果用户名不为空
                if(!empty($gname)) {
                    $query->where('gname','like','%'.$gname.'%');
                }
                //价格区间
                if(!empty($price)) {
                    $query->where('price','like','%'.$price.'%');
                }
            })->paginate(5); */




        return view('admin.goods.index',[
            'title'=>'浏览商品',
            'data'=>$data,
            'arr'=>$arr

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        
        
        $res = Type::select(DB::raw('*,concat(path,tid) as paths'))->
                orderBy('paths')->
                where('tname','like','%'.$request->input('search').'%')->

                get();
        return view('admin/goods/add',[
            'title'=>'添加商品',
            'res'=>$res,
            'request'=>$request,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $this->validate($request, [
            'gname' => 'required',
            'company' => 'required',
            'stock'=>'regex:/^\d{1,9999}$/',
            'price'=>'regex:/^\d{1,9999}$/',
        ],[
            'gname.required'=>'商品名不能为空',
            'company.required'=>'生产商不能为空',
            'stock.regex'=>'库存格式不正确',
            'price.regex'=>'价格格式不正确',

        ]);


        $res = $request->except('_token','gpic[]');

        $res['addtime'] = time();

        $data = Goods::create($res);

        
        $gid = $data->id;
        $goods = Goods::find($gid);
        
        


        // 商品图片
        if($request->hasFile('gpic')){
            $gp = $request->file('gpic');

            $goodspc= [];
            foreach($gp as $k => $v){
                $gc = [];

                //设置名字
                $name = str_random(10).time();

                //获取后缀
                $suffix = $v->getClientOriginalExtension();

                //移动
                $v->move('./uploads/',$name.'.'.$suffix);

                $gc['gid'] = $gid;

                $gc['gpic'] = '/uploads/'.$name.'.'.$suffix;

                // dump($gc);

                $goodspc[] = $gc;



            }
        }



         //模型   出错
        try{
            $info = $goods->gimg()->createMany($goodspc);

            if($info){
                return redirect('/admin/goods/create')->with('success','添加成功');
            }
        }catch(\Exception $e){

            return back()->with('error','添加失败');

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
        $cate = Type::select(DB::raw('*,concat(path,tid) as paths'))->
                orderBy('paths')->
                get();
            
        
        $goodsone = Goods::where('id',$id)->first();

        $goodspic = Goodspic::where('gid',$id)->get();


        return view('admin.goods.edit',[
            'title'=>'商品的修改',
            'goodsone'=>$goodsone,
            'goodspic'=>$goodspic,
            'cate'=>$cate

        ]);
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
            'gname' => 'required',
            'company' => 'required',
            'stock'=>'regex:/^\d{1,9999}$/',
        ],[
            'gname.required'=>'商品名不能为空',
            'company.required'=>'生产商不能为空',
            'stock.regex'=>'库存格式不正确',

        ]);
        
        $res = $request->except('_token','gpic','_method');
                

      
        //商品图片
        if($request->hasFile('gpic')){
            /**
             * 如果有上传图片  就 删除   表 数据 和 本地  图片
             */

            $data = DB::table('goodspic')->where('gid',$id)->get();

            foreach ($data as $k => $v) {

            $pic = '@'.unlink('.'.$v->gpic);
                  
            }
            $del = DB::table('goodspic')->where('gid', $id)->delete();

         
            $gp = $request->file('gpic');

            $goodspc= [];

            foreach($gp as $k => $v){

                $gc = [];

                //设置名字
                $name = str_random(10).time();

                //获取后缀
                $suffix = $v->getClientOriginalExtension();

                //移动
                $v->move('./uploads/',$name.'.'.$suffix);

                $gc['gid'] = $id;

                $gc['gpic'] = '/uploads/'.$name.'.'.$suffix;

                $goodspc[] = $gc;
                 // dd($goodspc);
            }
            $data = DB::table('goodspic')->where('gid',$id)->insert($goodspc);

        }
       


       
         //模型   出错
       try{


            $info = Goods::where('id',$id)->update($res);
            if($info){
                return redirect('/admin/goods')->with('success','修改成功');

            }

       }catch(\Exception $e){

           return back()->with('error','修改失败');

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
        $goods = Goods::find($id);

        $data = $goods->delete();

        $res = $goods->gimg()->delete();


        //模型   出错
       try{

            if($data){
                return redirect('/admin/goods')->with('success','删除成功');

            }
       }catch(\Exception $e){
            echo 2345;
           return back()->with('error','删除失败');

       }
    }
}
