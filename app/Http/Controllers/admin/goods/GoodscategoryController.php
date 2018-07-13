<?php

namespace App\Http\Controllers\admin\goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Goods\Type;

use DB;


class GoodscategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $res = Type::select(DB::raw('*,concat(path,tid) as paths'))->
                orderBy('paths')->
                where('tname','like','%'.$request->input('search').'%')->
                get();

        return view('/admin/type/index',[
            'title'=>'浏览类别',
            'res'=>$res,
            'request'=>$request

        ]);
    }

    /**
     * Show the form for creating a new resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $res = DB::select('select * from type order by concat(path,tid)');

        // echo '<pre>';
        // dd($res[6]->pid);
        return view('/admin/type/add',[
            'res'=>$res,
            'title'=>'添加类别'
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
        // $name = DB::table('type')->pluck('tname');
        $this->validate($request, [
        'tname' => 'required|unique:type,tname|max:255'
        ],[
        'tname.required' =>'类别不能为空',
        'tname.unique' =>'类别名重复'

        ]);
        $res = $request->except('_token');   //获取所有数据
        
        $pid = $_POST['pid'];

        $data =  DB::table('type')->where('tid', $pid)->first();
         if ($pid==0) {
            $res['path'] = '0,';
        } else {
           // $ce =  $data->path."$pid,";
          // $data
            $res['path'] = $data->path."$pid,";
        }

        //模型   出错
        try{
            $data = Type::create($res);

            if($data){
                return redirect('/admin/type/create')->with('success','添加成功');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        

        $info = Type::find($id);

        $res = Type::select(DB::raw('*,concat(path,tid) as paths'))->
                orderBy('paths')->
                get(); 

       

        
        return view('admin.type.edit',[
            'title'=>'修改分类',
            'res'=>$res,
            'info'=>$info
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
        'tname' => 'required|unique:type,tname|max:255'
        ],[
        'tname.required' =>'类别不能为空',
        'tname.unique' =>'类别名重复'

        ]);
        $res = $request->except('_token','_method');



        try{
            $data = Type::where('tid',$id)->update($res);

            if($data){
                return redirect('/admin/type')->with('success','修改成功');
            }
        }catch(\Exception $e){

            return back();

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


        $cate=Type::where('pid','=',$id)->first();

        //
        //判断有没有子类
        //如果有子类不能删除
        if($cate){
            return redirect('/admin/type')->with('error','删除失败');
        }

        try {
            $res = type::where('tid',$id)->delete();
            //如果没有就可以删除

            if($res){
                return redirect('/admin/type')->with(['success'=>'删除成功']);
            }

        } catch (\Exception $e) {

                return redirect('/admin/type')->with('success','2345');
        }
    }
}
