<?php

namespace App\Http\Controllers\admin\lunbo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\lunbo;
class LunBoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $lunbo = $request->except(['_token']);
        // echo '<pre>';
        // var_dump($lunbo);die;
         //头像

        if($request->hasFile('url')){

            foreach ($lunbo as $key => $value) {
                    //设置名字
                $name = str_random(10).time();

                //获取后缀
                $suffix = $request->file('url')->getClientOriginalExtension();

                //移动
                $request->file('url')->move('./uploads/',$name.'.'.$suffix);
                }
      
        }

        //存数据表
        $lunbo['url'] = \Config::get('app.path').$name.'.'.$suffix.',';



         $data = \DB::table('lunbo')->insert($lunbo);
         var_dump($data);
        // dd($lunbo);
        //模型   出错
           /*try{
            $data = lunbo::create($lunbo);

            if($data){
                return redirect('/admin/index')->with(
                    'success','添加成功'
                );
            }
        }catch(\Exception $e){

            return back();

        }*/

  
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
