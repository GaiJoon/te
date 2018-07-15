<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Models\Goods\Type;
use App\Models\Goods\Goods;
use App\Models\Goods\Goodspic;
<<<<<<< HEAD

=======
use App\Models\admin\Lunbo;
>>>>>>> 06b41f199fbb517c162eb18c045ec877ca47b6d5

use DB;


class IndexController extends Controller
{


    public function index(Request $request)
    {

    	$data = Type::getsubcate(0);
    	// $goods = Goods::with('gimg')->get();
         $res = DB::table('friend')->get();
         // dump($res);
        $poster = DB::table('poster')->get();


    	$goods = Goods::with('gimg')
    			->where('id','<', 50)
               	->orderBy(DB::raw('RAND()'))
               	->take(12)
    			->get();

<<<<<<< HEAD
    	// dd($goods);
    	// dump($data);	
    	return view('home.index',[
    		'data' =>$data,	
    		'goods'=>$goods,
            'res'=>$res,
            'poster'=>$poster
    	]);
=======
          //轮播
          $Lunbo = \DB::table('lunbo')->where('status','2')->get();

          // dd($Lunbo);
        	//
        	if ($Lunbo) {
        		// $Lunbo->url = explode('|',$Lunbo->url);
            return view('home.index',[
          		'data' =>$data,
          		'goods'=>$goods,
                  'res'=>$res,
                  'poster'=>$poster,
                  'Lunbo'=>$Lunbo
          	]);
        		return view('home.index',['Lunbo'=>$Lunbo]);
        	}else{
        		$Lunbo->url=array('/homes/images/5.jpg','/homes/images/8.jpg','/homes/images/3.jpg');
        		// echo '<pre>';
        		// var_dump($Lunbo['url'][0]);die;
    			return view('home.index',['Lunbo'=>$Lunbo]);
        	}

    	// dd($goods);
    	// dump($data);

>>>>>>> 06b41f199fbb517c162eb18c045ec877ca47b6d5
    }



    //  public function poster(Request $request)
    // {

    //      $res = DB::table('friend')->get();

    //     $poster = DB::table('poster')->get();

<<<<<<< HEAD

       
=======


>>>>>>> 06b41f199fbb517c162eb18c045ec877ca47b6d5
    //     return view('home.index',[
    //         'res'=>$res,
    //         'poster'=>$poster
    //     ]);
    // }

<<<<<<< HEAD
}
=======
}
>>>>>>> 06b41f199fbb517c162eb18c045ec877ca47b6d5
